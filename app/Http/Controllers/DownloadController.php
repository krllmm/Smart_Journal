<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

use PhpOffice\PhpWord\PhpWord;

class DownloadController extends Controller
{
    public function download(Article $article){
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        $text = $section->addText($article->title);
        $text = $section->addText($article->content);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $doc_name = $article->title . ".docx";

        $objWriter->save(storage_path($doc_name));

        return response()->download(storage_path($doc_name));
    }
}
