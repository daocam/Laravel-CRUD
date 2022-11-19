<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::check())
        {
            $document = Document::select(DB::raw('count(*) as documents'), 'users_id')
            ->groupby('users_id')
            ->get();

            $document = Document::select()->paginate(4);
            
            return view('document.index', [ 'documents' => $document]);

        }

        return redirect(route('login'))->withErrors('Vous n\' êtes pas autorisé à accéder au site');  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'file'  =>  'required|file|mimes:pdf,zip,doc|max:2048'
        ]);

        $file = $validation['file'];

        $filename = time() . '.' . $request->file->extension();

        $doc_path = $request->file('file')->storeAs(
            'docs',
            $filename,
            'public'
        );

        $document = Document::create([
            'title' => $request->title,
            'title_fr' => $request->title_fr,
            'users_id'=> Auth::user()->id,
            'doc_path' => $doc_path

        ]);

        return redirect(route('document.index', $document->id));  

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return view('document.show', [
            'document' => $document
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        return view('document.edit', ['document' => $document]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $document->update([
            'title' => $request->title,
            'title_fr' => $request->title_fr
        ]);

        return redirect(route('document.show', $document->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return redirect(route('document.index'));
    }

    public function download(Document $document)
    {
        
    }
}
