<?php

namespace app\Http\Traits;

trait imageTrait
{
    private function name_image($request_name, $path)
    {


        $image = [];
        foreach ($request_name as $key =>  $request) {

            $file = $request->getClientOriginalExtension();
            $file_name = time() . ++$key . '.' . $file;
            $path = $path;
            $request->move($path, $file_name);

            $image[] = $file_name;
        }

        $name_images = implode(" ", $image);

        return  $name_images;
    }
}
