<?php

namespace GetCandy\Http\Transformers\Fractal\Languages;

use GetCandy\Api\Languages\Models\Language;
use GetCandy\Http\Transformers\Fractal\BaseTransformer;

class LanguageTransformer extends BaseTransformer
{
    protected $availableIncludes = [];

    public function transform(Language $language)
    {
        return [
            'id' => $language->encodedId(),
            'name' => $language->name,
            'lang' => $language->lang,
            'iso' => $language->iso,
            'default' => $language->default,
            'enabled' => $language->enabled,
            'current' => (bool) ($language->code == app()->getLocale())
        ];
    }
}
