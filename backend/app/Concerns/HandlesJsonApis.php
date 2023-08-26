<?php

namespace App\Concerns;

trait HandlesJsonApis
{
    public function successResponse($data, $code = 200)
    {
        $content = [
            'success' => true,
        ];
        if (is_string($data))
            $content['message'] = $data;

        else $content = array_merge($content, $data);

        return response()->json($content, $code);
    }
}
