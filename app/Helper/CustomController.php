<?php

namespace App\Helper;

use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;

class CustomController extends Controller
{
    /**
     * @param string $field
     *
     * @return string
     */
    public function generateImageName($field = '')
    {
        $value = '';
        if (request()->hasFile($field)) {
            $files = request()->file($field);
            $extension = $files->getClientOriginalExtension();
            $name = $this->uuidGenerator();
            $value = $name . '.' . $extension;
        }
        return $value;
    }

    /**
     * @return string
     */
    public function uuidGenerator()
    {
        return Uuid::uuid1()->toString();
    }

    /**
     * @param $fileName
     * @param $file
     * @param $destinationPath
     * @param $old
     *
     * @return void
     */
    public function saveImage($fileName, $file, $destinationPath, $old = null)
    {
        $file->move($destinationPath, $fileName);
        if ($old) {
            if (file_exists(public_path().$old)) {
                unlink(public_path().$old);
            }
        }
    }
}
