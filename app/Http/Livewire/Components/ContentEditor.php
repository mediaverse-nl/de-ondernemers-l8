<?php

namespace App\Http\Livewire\Components;

use App\Models\Text;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ContentEditor extends Component
{
    use AuthorizesRequests;

    public $lang;
    public $key;
    public $content;

    protected $rules = [
        'content' => 'nullable'
    ];

    public function mount($key)
    {
        $this->lang = \App::getLocale();
        $this->key = $key;
        $this->content = $this->text->text;
    }

    public function getTextProperty()
    {
        $textModel = Text::where('key_name', '=', $this->key)
            ->where('lang', '=', $this->lang)
            ->first();

        if ($textModel == false){
            $this->createText();
            $textModel = Text::where('key_name', '=', $this->key)
                ->where('lang', '=', $this->lang)
                ->first();
        }

        return $textModel;
    }

    public function render()
    {
//        dd( $this->authorize('update', $this->text));

        return view('livewire.components.content-editor');
    }

    public function updateText()
    {
//        $this->authorize('update', $this->text);

        $this->createText();

        session()->flash('message', 'Post successfully updated.');
    }

    public function createText()
    {
        $this->validate();

        Text::updateOrCreate(
            [
                'key_name' => $this->key,
                'lang' => $this->lang,
            ],
            [
                'key_name' => $this->key,
                'text' => $this->content,
                'lang' => $this->lang,
            ]
        );
    }
}
