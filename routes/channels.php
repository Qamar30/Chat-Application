<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

/**    return (int) $user->id === (int) $id;
}); **/


Broadcast::channel('chat', function ($user) {
  return Auth::check();
});