<?php

namespace App\Repositories;

use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File as HttpFile;

class FileRepository
{
    // Upload a single file
    public function upload($file, $fileable, $tableName = 'default')
    {
        $path = $file->store('uploads', 'public');
        return $fileable->files()->create([
            'url' => $path,
            'table_name' => $tableName
        ]);
    }

    // Upload multiple files
    public function uploadMultiple($files, $fileable, $tableName = 'default')
    {
        $uploaded = [];
        foreach ($files as $file) {
            $uploaded[] = $this->upload($file, $fileable, $tableName);
        }
        return $uploaded;
    }

    // Delete file
    public function delete(File $file)
    {
        Storage::disk('public')->delete($file->url);
        $file->delete();
    }

    // Delete all files for a fileable and table_name
    public function deleteAll($fileable, $tableName = null)
    {
        $query = $fileable->files();
        if ($tableName) {
            $query->where('table_name', $tableName);
        }

        foreach ($query->get() as $file) {
            $this->delete($file);
        }
    }

    public function uploadFromPath(string $path, $fileable, $tableName = 'default')
{
    // If image is a URL → download it
    if (filter_var($path, FILTER_VALIDATE_URL)) {
        $contents = file_get_contents($path);
        $filename = basename(parse_url($path, PHP_URL_PATH));

        Storage::disk('public')->put("uploads/{$filename}", $contents);
        $storedPath = "uploads/{$filename}";
    }
    // If image exists locally
    elseif (file_exists(public_path($path))) {
        $storedPath = Storage::disk('public')->putFile(
            'uploads',
            new HttpFile(public_path($path))
        );
    }
    else {
        // Invalid path → skip safely
        return null;
    }

    return $fileable->files()->create([
        'url'        => $storedPath,
        'table_name' => $tableName
    ]);
}
}
