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
$router->get('/music/artists', ['as' => 'artists_path', 'uses' => 'ArtistController@index']);
$router->get('/music/{artist}', ['as' => 'artist_path', 'uses' => 'ArtistController@show']);
$router->get('/music/artist/create', ['as' => 'artist_create_path', 'uses' => 'ArtistController@create']);
$router->post('music/artists', ['as' => 'artist_store_path', 'uses' => 'ArtistController@store']);

// Album routes
$router->get('/music/{artist}/albums', ['as' => 'albums_path', 'uses' => 'AlbumController@index']);
$router->get('/music/{artist}/{album}', ['as' => 'album_path', 'uses' => 'AlbumController@show']);
$router->get('/music/{artist}/album/add', ['as' => 'album_path', 'uses' => 'AlbumController@create']);

// Song routes
$router->get('/music/{artist}/{album}/{song}', ['as' => 'song_path', 'uses' => 'SongController@show']);
$router->get('/music/{artist}/{album}/song/add', ['as' => 'song_path', 'uses' => 'SongController@create']);
