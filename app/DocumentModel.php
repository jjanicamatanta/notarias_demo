<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentModel extends Model
{
    protected $fillable = [
        'document_type_id',
        'html_template_id'
    ];
    
    public function type_document(){
        return $this->belongsTo('App\DocumentType');
    }

    public function html_template(){
        return $this->belongsTo('App\HtmlTemplate');
    }
}
