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

// Default route for Angular
$router->get('/', ['as' => 'angular_main_path', 'uses' => 'ArtistController@angularIndex']);

// Laravel Routes
$router->get('/api/artists', ['as' => 'api_artists_path', 'uses' => 'ArtistController@apiIndex']);

// Artists routes
$router->get('/music/artists', ['as' => 'artists_path', 'uses' => 'ArtistController@index']);
$router->get('/music/{artist}', ['as' => 'artist_path', 'uses' => 'ArtistController@show']);
$router->get('/artist/create', ['as' => 'artist_create_path', 'uses' => 'ArtistController@create']);
$router->post('artist/store', ['as' => 'artist_store_path', 'uses' => 'ArtistController@store']);

// Album routes
$router->get('/music/{artist}/albums', ['as' => 'albums_path', 'uses' => 'AlbumController@index']);
$router->get('/music/{artist}/{album}', ['as' => 'album_path', 'uses' => 'AlbumController@show']);
$router->get('/album/create', ['as' => 'album_create_path', 'uses' => 'AlbumController@create']);
$router->post('album/store', ['as' => 'album_store_path', 'uses' => 'AlbumController@store']);

// Song routes
$router->get('/music/{artist}/{album}/{song}', ['as' => 'song_path', 'uses' => 'SongController@show']);
$router->get('/song/create', ['as' => 'song_create_path', 'uses' => 'SongController@create']);
$router->post('/song/store', ['as' => 'song_store_path', 'uses' => 'SongController@store']);
