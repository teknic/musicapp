<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;

class SongController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    $albums = Album::all()->toArray();
    // Create the select list for the form.
    $select_list = array();
    foreach($albums as $album) {
      $select_list[$album['id']] = $album['name'];
    }
		return view('song.create')->with('albums', $select_list);
	}

	/**
	 * Store a newly created resource in storage.
	 *
   * @param $request
   * @param $song
   *
	 * @return Response
	 */
	public function store(Request $request, Song $song)
	{
    // Create the artist record from input fields.
    $input = $request->all();
    $song->create($request->all());
    $album = Album::find($input['album_id']);
    $artist = Artist::find($album->artist_id);
    return redirect()->route('album_path', array('artist' => $artist->slug, 'album', $album->slug));
	}

	/**
	 * Display the specified resource.
	 *
   * @param $artist
   * @param $album
	 * @param $song
   *
	 * @return Response
	 */
	public function show(Artist $artist, Album $album, Song $song)
	{
		return view('song.show')->with('song', $song);
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
