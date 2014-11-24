<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Album;
use App\Models\Files;
use App\Models\Song;
use Illuminate\Http\Request;

class AlbumController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
   * @param $artist
   *
	 * @return Response
	 */
	public function index(Artist $artist)
	{
    $albums = Album::where('artist_id', '=', $artist->id)->get();
    return view('album.index')->with('albums', $albums)->with('artist', $artist);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    $artists = Artist::all()->toArray();
    // Create the select list for the form.
    $select_list = array();
    foreach($artists as $artist) {
      $select_list[$artist['id']] = $artist['name'];
    }

		return view('album.create')->with('artists', $select_list);
	}

	/**
	 * Store a newly created resource in storage.
	 *
   * @param $request
   * @param $album
   *
	 * @return Response
	 */
	public function store(Request $request, Album $album)
	{
    // Grab all the form input.
    $input = $request->all();
    if ($input['picture'] != null) {
      // Create a new file
      $picture = new Files();
      $image = $input['picture'];
      $destination_path = public_path() . '/storage/album_covers/';
      $picture->filename = $image->getClientOriginalName();
      $picture->location = '/storage/album_covers/' . $picture->filename;
      $picture->filemime = $image->getMimeType();
      $picture->filesize = $image->getSize();
      $result = $image->move($destination_path, $picture->filename);
      if ($result) {
        $picture->save();
      }
    }
    // Populate album object.
    $album->name = $input['name'];
    $album->year = $input['year'];
    $album->label = $input['label'];
    if (isset($picture) && $picture->id) {
      $album->picture = $picture->id;
    }
    $album->artist_id = $input['artist_id'];
    $album->slug = $input['slug'];
    $album->save();

    $artist = Artist::find($album->artist_id);
    return redirect()->route('albums_path', array('artist' => $artist->slug));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param $artist
   * @param $album
   *
	 * @return Response
	 */
	public function show(Artist $artist, Album $album)
	{
    $songs = Song::where('album_id', '=', $album->id)->get();
		return view('album.show')->with('artist', $artist)->with('album', $album)->with('songs', $songs);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
