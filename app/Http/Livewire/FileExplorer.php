<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Symfony\Component\Finder\Finder;

class FileExplorer extends Component
{
    public string $location = '/';

    public array $contents = [];

    public function mount()
    {
        $this->listCurrentDirectoryContent('/var');
    }

    public function listCurrentDirectoryContent($directoryName)
    {
        $this->contents = [];
        $this->location = $directoryName;
        $finder = Finder::create()
            ->in($this->location)
            ->ignoreUnreadableDirs()
            ->depth('== 0')
            ->sortByType();
        foreach ($finder as $file) {
            $this->contents[] = $file;
        }
    }

    public function render()
    {
        return view('livewire.file-explorer');
    }
}
