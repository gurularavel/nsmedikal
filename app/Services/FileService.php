<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class FileService
{
    public static function copyFile(string $destinationFolder, string $sourcePath): string
    {
        if (!file_exists($path = public_path() . "/uploads/$destinationFolder")) {
            mkdir($path, recursive: true);
        }

        $name = File::name($sourcePath) . uniqid() . '.' . File::extension($sourcePath);

        if (!file_exists($filePath = $path . '/' . $name)) {
            File::copy($sourcePath, $filePath);
        }

        return $name;
    }

    public static function delete(string $folder, string $file): void
    {
        if (file_exists($path = "uploads/$folder/$file")) {
            unlink($path);
        }
    }

    public static function deleteFolder(string $folder): void
    {
        File::deleteDirectory(public_path() . '/uploads/' . $folder);
    }

    public static function upload(string $folder, UploadedFile $file): string
    {
        if (!file_exists($path = "uploads/$folder")) {
            mkdir($path, recursive: true);
        }

        $name = uniqid() . '.' . str($file->extension())->lower();

        $file->move("uploads/$folder", $name);

        return $name;
    }
}
