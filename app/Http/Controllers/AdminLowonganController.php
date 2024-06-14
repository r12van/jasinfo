<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminLowonganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $dokumenDir = "public/document/loker/";
        $dbDir = "document/loker/";
    }

    protected $dokumenDir = "public/document/loker/";
    protected $dbDir = "document/loker/";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();
        $lokers = Lowongan::select("tabel_lowongan.id", "judul", "tanggal", "isi", "dokumen", "id_tag", "tabel_lowongan.slug", "tag_loker")
            ->join('tag','tabel_lowongan.id_tag','=','tag.id')->get();
        // return $lokers;
        return view('admin.dashboard.loker')->with([
            "tags" => $tags,
            "lokers" => $lokers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tag = Tag::all();
        return view('admin.dashboard.addloker')->with([
            "tags" => $tag
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge(['slug' => Str::slug($request->input('judul'))]);
        $file = $request->berkasDokumen;
        $fileName = $this->convertToCamelCaseUrlFriendlyFilename($file->getClientOriginalName());
        if ($file->isValid()) {
            $request->berkasDokumen->move($this->dbDir, $fileName);
        }
        $request->merge(['dokumen' => $this->dbDir.$fileName]);

        $activity = Lowongan::create($request->all());

        if ($activity->exists) {
            // return redirect()->back()->with("alert.success", "Lowongan berhasil disimpan!");
            return redirect()->route('tabelLoker', ['alert.success' => 'Lowongan berhasil disimpan!']);
        } else {
        // failure
        }
        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function tagIndex() {
        $tags = Tag::all();
        return view('admin.dashboard.tagloker', compact('tags'));
    }

    private function convertToCamelCaseUrlFriendly($string) {
        // Lowercase the entire string and trim whitespace
        $string = strtolower(trim($string));

        // Replace non-word characters with dashes (-)
        $string = preg_replace('/\W+/', '-', $string);

        // Capitalize the first letter of each word (except the first)
        $string = ucwords($string, '-');

        // Remove leading and trailing dashes
        $string = trim($string, '-');

        return $string;
    }

    private function convertToCamelCaseUrlFriendlyFilename($string) {
        // Separate the filename and extension
        $parts = explode('.', $string);
        $filename = $parts[0];
        $extension = isset($parts[1]) ? ".$parts[1]" : '';

        // Convert filename to camelCase and URL-friendly format
        $filename = $this->convertToCamelCaseUrlFriendly($filename);

        // Return the combined filename and extension
        return $filename . $extension;
    }
}
