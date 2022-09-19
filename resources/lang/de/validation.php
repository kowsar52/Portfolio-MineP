<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Die :attribute müssen akzeptiert werden.',
    'accepted_if' => 'Die :attribute muss akzeptiert werden, wenn :other ist :value.',
    'active_url' => 'Die :attribute ist keine gültige URL.',
    'after' => 'Die :attribute muss ein Datum nach sein :date.',
    'after_or_equal' => 'Die :attribute must be a date after or equal to :date.',
    'alpha' => 'Die :attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => 'Die :attribute dürfen nur Buchstaben, Ziffern, Bindestriche und Unterstriche enthalten.',
    'alpha_num' => 'Die :attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => 'Die :attribute muss ein Array sein.',
    'before' => 'Die :attribute must be a date before :date.',
    'before_or_equal' => 'Die :attribute muss ein Datum vor oder gleich sein :date.',
    'between' => [
        'numeric' => 'Die :attribute muss dazwischen liegen :min und :max.',
        'file' => 'Die :attribute muss dazwischen liegen :min und :max Kilobyte.',
        'string' => 'Die :attribute muss dazwischen liegen :min und :max Zeichen.',
        'array' => 'Die :attribute dazwischen haben muss :min und :max Artikel.',
    ],
    'boolean' => 'Die :attribute Feld muss wahr oder falsch sein.',
    'confirmed' => 'Die passwort Bestätigung stimmt nicht überein.',
    'current_password' => 'Das Passwort ist inkorrekt.',
    'date' => 'Die :attribute ist kein gültiges Datum.',
    'date_equals' => 'Die :attribute must be a date equal to :date.',
    'date_format' => 'Die :attribute does not match the format :format.',
    'declined' => 'Die :attribute must be declined.',
    'declined_if' => 'Die :attribute must be declined when :other is :value.',
    'different' => 'Die :attribute and :other must be different.',
    'digits' => 'Die :attribute must be :digits digits.',
    'digits_between' => 'Die :attribute muss dazwischen liegen :min and :max digits.',
    'dimensions' => 'Die :attribute has invalid image dimensions.',
    'distinct' => 'Die :attribute field has a duplicate value.',
    'email' => 'Die :attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with' => 'Die :attribute muss mit einem der folgenden enden: :values.',
    'enum' => 'Die gewählte :attribute ist ungültig.',
    'exists' => 'Die gewählte :attribute ist ungültig.',
    'file' => 'Die :attribute muss eine Datei sein.',
    'filled' => 'Die :attribute Feld muss einen Wert haben.',
    'gt' => [
        'numeric' => 'Die :attribute muss größer sein als :value.',
        'file' => 'Die :attribute muss größer sein als :value Kilobyte.',
        'string' => 'Die :attribute muss größer sein als :value Zeichen.',
        'array' => 'Die :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'Die :attribute muss größer sein als or equal to :value.',
        'file' => 'Die :attribute muss größer sein als or equal to :value Kilobyte.',
        'string' => 'Die :attribute muss größer sein als or equal to :value Zeichen.',
        'array' => 'Die :attribute must have :value items or more.',
    ],
    'image' => 'Die :attribute muss ein Bild sein.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'Die :attribute field does not exist in :other.',
    'integer' => 'Die :attribute must be an integer.',
    'ip' => 'Die :attribute must be a valid IP address.',
    'ipv4' => 'Die :attribute must be a valid IPv4 address.',
    'ipv6' => 'Die :attribute must be a valid IPv6 address.',
    'mac_address' => 'Die :attribute must be a valid MAC address.',
    'json' => 'Die :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'Die :attribute must be less than :value.',
        'file' => 'Die :attribute must be less than :value Kilobyte.',
        'string' => 'Die :attribute must be less than :value Zeichen.',
        'array' => 'Die :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'Die :attribute must be less than or equal to :value.',
        'file' => 'Die :attribute must be less than or equal to :value Kilobyte.',
        'string' => 'Die :attribute must be less than or equal to :value Zeichen.',
        'array' => 'Die :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'Die :attribute darf nicht größer sein als :max.',
        'file' => 'Die :attribute darf nicht größer sein als :max Kilobyte.',
        'string' => 'Die :attribute darf nicht größer sein als :max Zeichen.',
        'array' => 'Die :attribute must not have more than :max items.',
    ],
    'mimes' => 'Die :attribute must be a file of type: :values.',
    'mimetypes' => 'Die :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'Die :attribute must be at least :min.',
        'file' => 'Die :attribute must be at least :min Kilobyte.',
        'string' => 'Die :attribute must be at least :min Zeichen.',
        'array' => 'Die :attribute must have at least :min items.',
    ],
    'multiple_of' => 'Die :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'Die :attribute Format ist ungültig.',
    'numeric' => 'Die :attribute muss eine Nummer sein.',
    'password' => 'Das Passwort ist inkorrekt.',
    'present' => 'Die :attribute field must be present.',
    'prohibited' => 'Die :attribute field is prohibited.',
    'prohibited_if' => 'Die :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'Die :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'Die :attribute field prohibits :other from being present.',
    'regex' => 'Die :attribute Format ist ungültig.',
    'required' => 'Die :attribute field is required.',
    'required_if' => 'Die :attribute field is required when :other is :value.',
    'required_unless' => 'Die :attribute field is required unless :other is in :values.',
    'required_with' => 'Die :attribute field is required when :values is present.',
    'required_with_all' => 'Die :attribute field is required when :values are present.',
    'required_without' => 'Die :attribute field is required when :values is not present.',
    'required_without_all' => 'Die :attribute field is required when none of :values are present.',
    'same' => 'Die :attribute and :other must match.',
    'size' => [
        'numeric' => 'Die :attribute must be :size.',
        'file' => 'Die :attribute must be :size Kilobyte.',
        'string' => 'Die :attribute must be :size Zeichen.',
        'array' => 'Die :attribute must contain :size items.',
    ],
    'starts_with' => 'Die :attribute must start with one of the following: :values.',
    'string' => 'Die :attribute muss eine Zeichenfolge sein.',
    'timezone' => 'Die :attribute must be a valid timezone.',
    'unique' => 'Die :attribute wurde bereits übernommen.',
    'uploaded' => 'Die :attribute failed to upload.',
    'url' => 'Die :attribute must be a valid URL.',
    'uuid' => 'Die :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
