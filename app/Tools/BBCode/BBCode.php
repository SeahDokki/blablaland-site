<?php

namespace App\Tools\BBCode;

use JBBCode\CodeDefinitionBuilder;
use JBBCode\DefaultCodeDefinitionSet;
use JBBCode\Parser;

class BBCode
{
    private Parser $defaultParser;

    public function __construct()
    {
        $this->defaultParser = new Parser();
        $this->defaultParser->addCodeDefinitionSet(new DefaultCodeDefinitionSet());
        $this->initializeCodeDefinitions();
    }

    private function initializeCodeDefinitions(): void
    {
        $definitions = [
            (new CodeDefinitionBuilder('center', '<div class="text-center">{param}</div>'))->build(),
            (new CodeDefinitionBuilder('img', '<img src="{param}" style="max-width:595px;"/>'))->build(),
            (new CodeDefinitionBuilder('img', '<img src="{param}" style="float: {align}; margin: 0 1em 1em 0;max-width:595px;"/>'))->setUseOption(true)->build(),
            (new CodeDefinitionBuilder('right', '<div class="text-end">{param}</div>'))->build(),
            (new CodeDefinitionBuilder('left', '<div class="text-start">{param}</div>'))->build(),
            (new CodeDefinitionBuilder('s', '<s>{param}</s>'))->build(),
            (new CodeDefinitionBuilder('size', '<span class="font-size-{option}">{param}</span>'))->setUseOption(true)->build(),
            (new CodeDefinitionBuilder('quote', '<div class="card card-body rounded-0" style="display: block"><strong>{option} a écrit :</strong>{param}</div>'))->setUseOption(true)->build(),
            (new CodeDefinitionBuilder('quote', '<div class="card card-body rounded-0" style="display: block"><strong>{option} a écrit :</strong>{param}</div>'))->setUseOption(true)->build(),
            (new CodeDefinitionBuilder('c', '<code class="card card-body rounded-0">{param}</code>'))->build(),
            (new CodeDefinitionBuilder('video', '<iframe width="520" height="315" src="https://www.youtube.com/embed/{param}?autoplay=0&mute=1"></iframe>'))->build()
        ];

        foreach ($definitions as $definition) {
            $this->defaultParser->addCodeDefinition($definition);
        }
    }


    /**
     * @param string $html
     * @return string
     */
    private function escapeHtml(string $html): string
    {
        return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8', true);
    }

    /**
     * @param string $html
     * @return string
     */
    private function proxyHTML(string $html): string
    {
        $imgPattern = '/<img\s+[^>]*src=("[^"]*"|\'[^\']*\')/';

        $imgReplacement = function ($match) {
            preg_match('/src=(".*?"|\'.*?\')/i', $match[0], $srcMatches);
            $src = trim($srcMatches[1], '"\'');
            return '<img src="https://proxy.duckduckgo.com/iu/?u=' . urlencode($src) . '"';
        };

        $aPattern = '/<a\s+[^>]*href=("[^"]*"|\'[^\']*\')/';

        $aReplacement = function ($match) {
            preg_match('/href=(".*?"|\'.*?\')/i', $match[0], $hrefMatches);
            $href = trim($hrefMatches[1], '"\'');
            if (!str_starts_with($href, config('app.url'))) {
                return '<a href="' . $href . '" target="_blank"';
            } else {
                return $match[0];
            }
        };

        $html = preg_replace_callback($imgPattern, $imgReplacement, $html);
        return preg_replace_callback($aPattern, $aReplacement, $html);
    }

    /**
     * @return string[]
     */
    private function initializeEmoticons(): array
    {
        return [
            ':)' => 'bbl_content', ';)' => 'bbl_wink', ':D' => 'bbl_mdr', ':P' => 'bbl_hopla', ':cool:' => 'bbl_cool', ':lol:' => 'bbl_fetard',
            ':love:' => 'bbl_love', ':|' => 'bbl_neutre', ':(' => 'bbl_sad', ':snif:' => 'bbl_larme', ':pleure:' => 'bbl_pleure', ';P' => 'bbl_na',
            ':o' => 'bbl_ho', ':timide:' => 'bbl_timide', ':grrr:' => 'bbl_furieux', ':etonne:' => 'bbl_etonne', ':s' => 'bbl_dubitatif',
            ':/' => 'bbl_deg', 'é_è' => 'bbl_decu', ':beurk:' => 'bbl_beurk', '>(=' => 'bbl_chin', ';(' => 'bbl_grognon', ':?:' => 'bbl_question',
            'oX' => 'bbl_skull', ':super:' => 'bbl_super', ':nul:' => 'bbl_nul', ':nolove:' => 'bbl_nolove', ':music:' => 'bbl_music',
            ':plop:' => 'bbl_goutte', ':kiss:' => 'bbl_kiss', ':caca:' => 'bbl_caca', ':$:' => 'bbl_dollar', ':€:' => 'bbl_euro',
            ':idee:' => 'bbl_idee'
        ];
    }

    /**
     * @param string $html
     * @param array $emoticons
     * @return string
     */
    private function replaceEmoticons(string $html, array $emoticons): string
    {
        $pattern = '/(<a\s[^>]*>.*?<\/a>|<img\s[^>]*>|<iframe\s[^>]*>)(*SKIP)(*F)|(<a\s[^>]*href\s*=\s*["\'][^"\'<>]*["\'][^>]*>)(*SKIP)(*F)|(%s)/';

        foreach ($emoticons as $emoticon => $image) {
            $imgTag = '<img src="/images/forum/smiles/' . $image . '.png">';
            $html = preg_replace(sprintf($pattern, preg_quote($emoticon, '/')), $imgTag, $html);
        }

        return $html;
    }

    /**
     * @param string $string
     * @return string
     */
    public function parseDefault(string $string): string
    {
        $string = $this->escapeHtml($string);
        $this->defaultParser->parse($string);
        $html = $this->defaultParser->getAsHtml();
        $html = $this->proxyHTML($html);
        return $this->replaceEmoticons($html, $this->initializeEmoticons());
    }
}
