<?php

//Route Model Binding
Route::bind('artist', function($artist) {
  return App\Models\Artist::where('slug', $artist)->first();
});

Route::bind('album', function($album) {
  return App\Models\Album::where('slug', $album)->first();
});

Route::bind('song', function($song) {
  return App\Models\Song::where('slug', $song)->first();
});

// Artists routes
$router->get('/artists', ['as' => 'artists_path', 'uses' => 'ArtistController@index']);
$router->get('/artist/{artist}', ['as' => 'artist_path', 'uses' => 'ArtistController@show']);

// Album routes
$router->get('/artist/{artist}/albums', ['as' => 'albums_path', 'uses' => 'AlbumController@index']);
$router->get('/artist/{artist}/{album}', ['as' => 'album_path', 'uses' => 'AlbumController@show']);

// Song routes
$router->get('/artist/{artist}/{album}/{song}', ['as' => 'song_path', 'uses' => 'SongController@show']);
