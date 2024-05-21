<?php

namespace App\Traits;


use App\Models\Forum\Post;

trait TopicTrait
{
    /**
     * @param Post $post
     * @return float
     */

    function getAuthorAttribute(): string
    {
        return $this->user ? $this->user->usernameColor : "<span style='color:black'>Touriste_". $this->id ."</span>";
    }

    function getPageForPost(Post $post): float
    {

        $postsBefore = $this->posts()
            ->where('created_at', '<=', $post->created_at)
            ->count();
        return ceil(($postsBefore + 1) / 15);
    }
}
