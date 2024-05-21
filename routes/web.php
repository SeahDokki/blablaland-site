<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('game', [\App\Http\Controllers\GameController::class, 'index'])->name('game');
Route::get('game-light', [\App\Http\Controllers\GameController::class, 'light'])->name('game.light');
Route::get('console/view', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'index'])->name('console.index');
Route::get('team', [\App\Http\Controllers\TeamController::class, 'index'])->name('team');

Route::get('user/{user}', [\App\Http\Controllers\Account\AccountController::class, 'show'])->name('user.show');
Route::get('/site/membres.php', [\App\Http\Controllers\Account\AccountController::class, 'redirect']);

Route::get('news/{news}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show');

Route::get('community', [\App\Http\Controllers\Community\CommunityController::class, 'index'])->name('community.index');
Route::get('community/artclub', [\App\Http\Controllers\Community\ArtworkController::class, 'index'])->name('community.artwork.index');
Route::get('community/artclub/{artwork}', [\App\Http\Controllers\Community\ArtworkController::class, 'show'])->name('community.artwork.show');
Route::get('community/search', [\App\Http\Controllers\Community\SearchController::class, 'index'])->name('community.search.index');

Route::middleware([\App\Http\Middleware\ForumAccess::class, \App\Http\Middleware\ForumConnected::class])->group(function () {
    Route::get('forum', [\App\Http\Controllers\Forum\CategoryController::class, 'index'])->name('category.index');
    Route::get('forum/section/{section}', [\App\Http\Controllers\Forum\SectionController::class, 'index'])->name('section.index');
    Route::get('forum/topic/{topic}', [\App\Http\Controllers\Forum\TopicController::class, 'show'])->name('topic.show');
});

Route::get('games', [\App\Http\Controllers\Games\GameController::class, 'index'])->name('game.index');
Route::get('games/haunted-manor/{type?}', [\App\Http\Controllers\Games\HauntedManorController::class, 'index'])->name('game.haunted-manor');
Route::get('games/dungeon/{type?}', [\App\Http\Controllers\Games\DungeonController::class, 'index'])->name('game.dungeon');
Route::get('games/pyramid/{type?}', [\App\Http\Controllers\Games\PyramidController::class, 'index'])->name('game.pyramid');
Route::get('games/naval-battle/{type?}', [\App\Http\Controllers\Games\NavalBattleController::class, 'index'])->name('game.naval-battle');
Route::get('games/mysthoria/{type?}', [\App\Http\Controllers\Games\MysthoriaController::class, 'index'])->name('game.mysthoria');
Route::get('games/tournament-fury/{type?}', [\App\Http\Controllers\Games\TournamentFuryController::class, 'index'])->name('game.tournament-fury');

Route::get('games/pirate-quest/{type?}', [\App\Http\Controllers\Games\PirateQuestController::class, 'index'])->name('game.pirate-quest');
Route::get('games/irwish-toilet/{type?}', [\App\Http\Controllers\Games\IrwishToiletController::class, 'index'])->name('game.irwish-toilet');

Route::get('shop', [\App\Http\Controllers\Shop\ShopController::class, 'index'])->name('shop.index');

Route::get('shop/skins', [\App\Http\Controllers\Shop\SkinController::class, 'index'])->name('shop.skin.index');
Route::get('shop/skins/filter', [\App\Http\Controllers\Shop\SkinController::class, 'filter'])->name('shop.skin.filter');
Route::get('shop/skins/group/{group}', [\App\Http\Controllers\Shop\SkinController::class, 'group'])->name('shop.skin.group');
Route::get('shop/skins/{skin}', [\App\Http\Controllers\Shop\SkinController::class, 'show'])->name('shop.skin.show');
Route::get('site/shop_skin.php', [\App\Http\Controllers\Shop\SkinController::class, 'redirect'])->name('shop.skin.redirect');

Route::get('shop/objects', [\App\Http\Controllers\Shop\PowerController::class, 'index'])->name('shop.power.index');
Route::get('shop/objects/filter', [\App\Http\Controllers\Shop\PowerController::class, 'filter'])->name('shop.power.filter');
Route::get('shop/objects/gender/{id}', [\App\Http\Controllers\Shop\PowerController::class, 'gender'])->name('shop.power.gender');
Route::get('shop/objects/{power}', [\App\Http\Controllers\Shop\PowerController::class, 'show'])->name('shop.power.show');
Route::get('site/shop_objet.php', [\App\Http\Controllers\Shop\PowerController::class, 'redirect'])->name('shop.skin.redirect');

Route::get('shop/smileys', [\App\Http\Controllers\Shop\SmileyController::class, 'index'])->name('shop.smiley.index');
Route::get('shop/smileys/{smiley}', [\App\Http\Controllers\Shop\SmileyController::class, 'show'])->name('shop.smiley.show');


Route::post('scripts/profil/getSkinList.php', [\App\Http\Controllers\Account\SkinController::class, 'getSkinList'])->name('getSkinList');
Route::get('scripts/profil/setSkinData.php', [\App\Http\Controllers\Account\SkinController::class, 'setSkinData']);

Route::post('scripts//chat/getBBL.php', [\App\Http\Controllers\Blablaland\ChatController::class, 'getBBL']);
Route::post('scripts/chat/keepalive.php', [\App\Http\Controllers\Blablaland\ChatController::class, 'keepAlive']);
Route::post('scripts//chat/dailyMessage.php', [\App\Http\Controllers\Blablaland\ChatController::class, 'dailyMessage']);
Route::get('scripts/chat/pricesInfos.php', [\App\Http\Controllers\Blablaland\ChatController::class, 'pricesInfos']);
Route::get('scripts/chat/achatsWrapper.php', [\App\Http\Controllers\Blablaland\ChatController::class, 'achatsWrapper']);
Route::post('scripts/chat/getPrisonMotif.php', [\App\Http\Controllers\Blablaland\ChatController::class, 'getPrisonMotif']);
Route::post('scripts//chat/contactManager.php', [\App\Http\Controllers\Blablaland\ChatController::class, 'contactManager']);
Route::post('scripts/chat/noelPhoto.php', [\App\Http\Controllers\Blablaland\ChatController::class, 'noelPhoto']);

Route::post('scripts/console/getsession.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'getSession'])->name('blablaland.console.getSession');
Route::post('scripts/console/keepalive.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'keepAlive'])->name('blablaland.console.keepAlive');
Route::post('scripts/console/getLightEffect.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'getLightEffect'])->name('blablaland.console.getLightEffect');
Route::post('scripts/console/setLightEffect.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'setLightEffect'])->name('blablaland.console.setLightEffect');
Route::post('scripts/console/getAKBList.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'getAKBList'])->name('blablaland.console.getAKBList');
Route::get('scripts/console/casierJudiciere.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'casierJudiciere'])->name('blablaland.console.casierJudiciere');
Route::post('scripts/console/getCasierJudiciere.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'getCasierJudiciere'])->name('blablaland.console.getCasierJudiciere');
Route::post('scripts/console/casierJudiciereAdd.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'casierJudiciereAdd'])->name('blablaland.console.casierJudiciereAdd');
Route::post('scripts/console/searchUser.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'searchUser'])->name('blablaland.console.searchUser');
Route::post('scripts/console/dailyMessage.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'dailyMessage'])->name('blablaland.console.dailyMessage');
Route::post('scripts/console/advServer.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'advServer'])->name('blablaland.console.advServer');
Route::post('scripts/console/gradesNameList.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'gradesNameList'])->name('blablaland.console.gradesNameList');
Route::post('scripts/console/updatePseudo.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'updatePseudo'])->name('blablaland.console.updatePseudo');
Route::post('scripts/console/setDroits.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'setDroits'])->name('blablaland.console.setDroits');
Route::post('scripts/console/getInsultronList.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'getInsultronList'])->name('blablaland.console.getInsultronList');
Route::post('scripts/console/setInsultronList.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'setInsultronList'])->name('blablaland.console.getInsultronList');
Route::post('scripts/console/getGradeUser.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'getGradeUser'])->name('blablaland.console.getGradeUser');
Route::post('scripts/console/setGradeUser.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'setGradeUser'])->name('blablaland.console.setGradeUser');
Route::post('scripts/console/clearsession.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'clearSession'])->name('blablaland.console.clearSession');
Route::post('scripts/console/getUserByIp.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'getUserByIp'])->name('blablaland.console.getUserByIp');
Route::post('scripts/console/getUserListing.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'getUserListing'])->name('blablaland.console.getUserListing');
Route::post('scripts/console/IPLogDB.php', [\App\Http\Controllers\Blablaland\ConsoleController::class, 'IPLogDB'])->name('blablaland.console.IPLogDB');

Route::middleware(['auth'])->group(function () {
    Route::get('user/{user}/delete/signature', [\App\Http\Controllers\Account\AccountController::class, 'signature'])->middleware('authorization:90')->name('user.delete.signature');
    Route::get('user/{user}/ban', [\App\Http\Controllers\Account\AccountController::class, 'show'])->middleware('authorization:90')->name('user.ban');
    Route::post('user/{user}/ban', [\App\Http\Controllers\Account\AccountController::class, 'ban'])->middleware('authorization:90');


    Route::get('/site/mon_compte.php', [\App\Http\Controllers\Account\AccountController::class, 'index']);
    Route::get('account', [\App\Http\Controllers\Account\AccountController::class, 'index'])->name('account.index');
    Route::get('account/update', [\App\Http\Controllers\Account\UserController::class, 'index'])->name('account.user');
    Route::post('account/update', [\App\Http\Controllers\Account\UserController::class, 'update'])->name('account.user.update');
    Route::get('account/username', [\App\Http\Controllers\Account\UsernameController::class, 'index'])->name('account.username.index');
    Route::post('account/username', [\App\Http\Controllers\Account\UsernameController::class, 'update'])->name('account.username.update');
    Route::get('account/avatar', [\App\Http\Controllers\Account\AvatarController::class, 'index'])->name('account.avatar.index');
    Route::post('account/avatar', [\App\Http\Controllers\Account\AvatarController::class, 'update'])->name('account.avatar.update');
    Route::get('account/statut', [\App\Http\Controllers\Account\StatutController::class, 'index'])->name('account.statut.index');
    Route::post('account/statut', [\App\Http\Controllers\Account\StatutController::class, 'update'])->name('account.statut.update');
    Route::get('account/signature', [\App\Http\Controllers\Account\SignatureController::class, 'index'])->name('account.signature.index');
    Route::post('account/signature', [\App\Http\Controllers\Account\SignatureController::class, 'update'])->name('account.signature.update');
    Route::get('account/tags', [\App\Http\Controllers\Account\TagController::class, 'index'])->name('account.tag.index');
    Route::post('account/tags', [\App\Http\Controllers\Account\TagController::class, 'update'])->name('account.tag.update');
    Route::get('account/tags/destroy', [\App\Http\Controllers\Account\TagController::class, 'destroy'])->name('account.tag.destroy');
    Route::get('account/tags/destroy/{tag}', [\App\Http\Controllers\Account\TagController::class, 'destroy'])->name('account.tag.destroy');
    Route::get('account/friends', [\App\Http\Controllers\Account\FriendController::class, 'index'])->name('account.friend.index');
    Route::get('account/friends/send/{player}', [\App\Http\Controllers\Account\FriendController::class, 'sendAffinity'])->name('account.friend.send');
    Route::get('account/friends/accept/{affinity}', [\App\Http\Controllers\Account\FriendController::class, 'acceptAffinity'])->name('account.friend.accept');
    Route::get('account/friends/delete/{affinity}', [\App\Http\Controllers\Account\FriendController::class, 'deleteAffinity'])->name('account.friend.delete');
    Route::get('account/friends/decline/{affinity}', [\App\Http\Controllers\Account\FriendController::class, 'declineAffinity'])->name('account.friend.decline');
    Route::get('account/friends/cancel/{affinity}', [\App\Http\Controllers\Account\FriendController::class, 'cancelAffinity'])->name('account.friend.cancel');
    Route::get('account/discord', [\App\Http\Controllers\Account\DiscordController::class, 'index'])->name('account.discord.index');
    Route::get('account/token', [\App\Http\Controllers\Account\TokenController::class, 'index'])->name('account.token.index');

    Route::middleware([\App\Http\Middleware\ForumAccess::class, \App\Http\Middleware\ForumConnected::class])->group(function () {
        Route::get('forum/topic/create/{section}', [\App\Http\Controllers\Forum\TopicController::class, 'create'])->name('topic.create');
        Route::post('forum/topic/create/{section}', [\App\Http\Controllers\Forum\TopicController::class, 'store'])->name('topic.store');
        Route::get('forum/topic/destroy/{topic}', [\App\Http\Controllers\Forum\TopicController::class, 'destroy'])->name('topic.destroy')->middleware('authorization:90');
        Route::get('forum/topic/lock/{topic}', [\App\Http\Controllers\Forum\TopicController::class, 'lock'])->name('topic.lock')->middleware('authorization:90');
        Route::get('forum/topic/pin/{topic}', [\App\Http\Controllers\Forum\TopicController::class, 'pin'])->name('topic.pin')->middleware('authorization:90');
        Route::post('forum/topic/move/{topic}', [\App\Http\Controllers\Forum\TopicController::class, 'move'])->name('topic.move')->middleware('authorization:90');

        Route::post('forum/topic/{topic}', [\App\Http\Controllers\Forum\PostController::class, 'create'])->name('post.create');
        Route::post('api/forum/topic/{post}', [\App\Http\Controllers\Forum\PostController::class, 'api'])->name('post.api');
        Route::get('forum/post/edit/{post}', [\App\Http\Controllers\Forum\PostController::class, 'edit'])->name('post.edit');
        Route::post('forum/post/edit/{post}', [\App\Http\Controllers\Forum\PostController::class, 'update'])->name('post.update');
        Route::get('forum/post/destroy/{post}', [\App\Http\Controllers\Forum\PostController::class, 'destroy'])->name('post.destroy');
    });

    Route::post('shop/skins/{skin}', [\App\Http\Controllers\Shop\SkinController::class, 'store'])->name('shop.skin.store');
    Route::post('shop/objects/{power}', [\App\Http\Controllers\Shop\PowerController::class, 'store'])->name('shop.power.store');
    Route::post('shop/smileys/{smiley}', [\App\Http\Controllers\Shop\SmileyController::class, 'store'])->name('shop.smiley.store');

    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('authorization:90')->name('dashboard.index');
    Route::get('dashboard/login-history', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->middleware('authorization:300')->name('dashboard.login.index');

    Route::get('dashboard/news', [\App\Http\Controllers\Admin\NewsController::class, 'index'])->middleware('authorization:950')->name('dashboard.news.index');
    Route::get('dashboard/news/create', [\App\Http\Controllers\Admin\NewsController::class, 'create'])->middleware('authorization:950')->name('dashboard.news.create');
    Route::post('dashboard/news/create', [\App\Http\Controllers\Admin\NewsController::class, 'store'])->middleware('authorization:950')->name('dashboard.news.store');
    Route::get('dashboard/news/edit/{news}', [\App\Http\Controllers\Admin\NewsController::class, 'edit'])->middleware('authorization:950')->name('dashboard.news.edit');
    Route::post('dashboard/news/edit/{news}', [\App\Http\Controllers\Admin\NewsController::class, 'update'])->middleware('authorization:950')->name('dashboard.news.update');
    Route::get('dashboard/news/destroy/{news}', [\App\Http\Controllers\Admin\NewsController::class, 'destroy'])->middleware('authorization:950')->name('dashboard.news.destroy');
    Route::get('dashboard/news/published/{news}', [\App\Http\Controllers\Admin\NewsController::class, 'published'])->middleware('authorization:950')->name('dashboard.news.published');
    Route::get('dashboard/news/status/{news}', [\App\Http\Controllers\Admin\NewsController::class, 'status'])->middleware('authorization:950')->name('dashboard.news.status');

    Route::get('dashboard/artwork', [\App\Http\Controllers\Admin\ArtworkController::class, 'index'])->middleware('authorization:90')->name('dashboard.artwork.index');
    Route::get('dashboard/artwork/create', [\App\Http\Controllers\Admin\ArtworkController::class, 'create'])->middleware('authorization:90')->name('dashboard.artwork.create');
    Route::post('dashboard/artwork/create', [\App\Http\Controllers\Admin\ArtworkController::class, 'store'])->middleware('authorization:90')->name('dashboard.artwork.store');
    Route::get('dashboard/artwork/edit/{artwork}', [\App\Http\Controllers\Admin\ArtworkController::class, 'edit'])->middleware('authorization:90')->name('dashboard.artwork.edit');
    Route::post('dashboard/artwork/edit/{artwork}', [\App\Http\Controllers\Admin\ArtworkController::class, 'update'])->middleware('authorization:90')->name('dashboard.artwork.update');
    Route::get('dashboard/artwork/destroy/{artwork}', [\App\Http\Controllers\Admin\ArtworkController::class, 'destroy'])->middleware('authorization:90')->name('dashboard.artwork.destroy');

    Route::get('chat/bbl_chat.php', function() { return redirect()->route('game'); });
    Route::get('site/jeu_donjon.php', function() { return redirect()->route('game.dungeon'); });
    Route::get('site/jeu_manoir.php', function() { return redirect()->route('game.haunted-manor'); });
    Route::get('site/jeu_pyramide.php', function() { return redirect()->route('game.pyramid'); });
    Route::get('site/jeu_blablataille_navale.php', function() { return redirect()->route('game.naval-battle'); });
    Route::get('site/jeu_mysthoria.php', function() { return redirect()->route('game.mysthoria'); });

});

require __DIR__.'/auth.php';
