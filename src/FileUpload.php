<?php

namespace PyrobyteWeb\FileUpload;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PyrobyteWeb\FileUpload\Models\FileUpload as FileUploadModel;

class FileUpload
{
    protected string $defaultFileName;

    public function __construct(string $defaultFileName = 'user-upload')
    {
        $this->defaultFileName = $defaultFileName;
    }

    public function uploadFile(
        UploadedFile $file,
        int $createdBy = 0,
        int $itemId = 0,
        string $section = null,
        string $type = null
    ): FileUploadModel
    {
        if (!Storage::disk('public')->exists(config('file-upload.save_path'))) {
            Storage::disk('public')->makeDirectory(config('file-upload.save_path'));
        }

        $filename = $this->composeFileName() . '.' . $file->getClientOriginalExtension();

        Storage::disk('public')->putFileAs(
            config('file-upload.save_path'),
            $file,
            $filename
        );

        return FileUploadModel::create([
            'item_id' => $itemId,
            'created_by' => $createdBy,
            'type' => $type,
            'section' => $section,
            'path' => '/' . config('file-upload.save_path') . '/' . $filename,
            'name' => $filename,
            'size' => $file->getSize(),
        ]);
    }

    private function composeFileName(): string
    {
        return time() . '-' . md5(Str::random()) . '-' . $this->defaultFileName;
    }
}
