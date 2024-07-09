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

    'accepted' => 'Трябва да приемете :attribute.',
    'accepted_if' => 'Трябва да приемете :attribute, когато :other е :value.',
    'active_url' => ':attribute не е валиден URL адрес.',
    'after' => ':attribute трябва да бъде дата след :date.',
    'after_or_equal' => ':attribute трябва да бъде дата след или равна на :date.',
    'alpha' => ':attribute може да съдържа само букви.',
    'alpha_dash' => ':attribute може да съдържа само букви, числа, тирета и долни черти.',
    'alpha_num' => ':attribute може да съдържа само букви и числа.',
    'array' => ':attribute трябва да бъде масив.',
    'ascii' => ':attribute трябва да съдържа само еднобайтови буквено-цифрови знаци и символи.',
    'before' => ':attribute трябва да бъде дата преди :date.',
    'before_or_equal' => ':attribute трябва да бъде дата преди или равна на :date.',
    'between' => [
        'array' => ':attribute трябва да има между :min и :max елемента.',
        'file' => ':attribute трябва да бъде между :min и :max килобайта.',
        'numeric' => ':attribute трябва да бъде между :min и :max.',
        'string' => ':attribute трябва да бъде между :min и :max знака.',
    ],
    'boolean' => ':attribute трябва да бъде вярно или невярно.',
    'can' => ':attribute съдържа неоторизирана стойност.',
    'confirmed' => 'Потвърждението на :attribute не съвпада.',
    'contains' => ':attribute липсва задължителна стойност.',
    'current_password' => 'Паролата е неправилна.',
    'date' => ':attribute не е валидна дата.',
    'date_equals' => ':attribute трябва да бъде дата, равна на :date.',
    'date_format' => ':attribute не отговаря на формата :format.',
    'decimal' => ':attribute трябва да има :decimal десетични места.',
    'declined' => ':attribute трябва да бъде отказано.',
    'declined_if' => ':attribute трябва да бъде отказано, когато :other е :value.',
    'different' => ':attribute и :other трябва да бъдат различни.',
    'digits' => ':attribute трябва да бъде :digits цифри.',
    'digits_between' => ':attribute трябва да бъде между :min и :max цифри.',
    'dimensions' => ':attribute има невалидни размери на изображението.',
    'distinct' => ':attribute има дублирана стойност.',
    'doesnt_end_with' => ':attribute не трябва да завършва с едно от следните: :values.',
    'doesnt_start_with' => ':attribute не трябва да започва с едно от следните: :values.',
    'email' => ':attribute трябва да бъде валиден имейл адрес.',
    'ends_with' => ':attribute трябва да завършва с едно от следните: :values.',
    'enum' => 'Избраният :attribute е невалиден.',
    'exists' => 'Избраният :attribute е невалиден.',
    'extensions' => ':attribute трябва да има едно от следните разширения: :values.',
    'file' => ':attribute трябва да бъде файл.',
    'filled' => ':attribute трябва да има стойност.',
    'gt' => [
        'array' => ':attribute трябва да има повече от :value елемента.',
        'file' => ':attribute трябва да бъде по-голям от :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-голям от :value.',
        'string' => ':attribute трябва да бъде по-голям от :value знака.',
    ],
    'gte' => [
        'array' => ':attribute трябва да има :value елемента или повече.',
        'file' => ':attribute трябва да бъде по-голям или равен на :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-голям или равен на :value.',
        'string' => ':attribute трябва да бъде по-голям или равен на :value знака.',
    ],
    'hex_color' => ':attribute трябва да бъде валиден шестнадесетичен цвят.',
    'image' => ':attribute трябва да бъде изображение.',
    'in' => 'Избраният :attribute е невалиден.',
    'in_array' => ':attribute не съществува в :other.',
    'integer' => ':attribute трябва да бъде цяло число.',
    'ip' => ':attribute трябва да бъде валиден IP адрес.',
    'ipv4' => ':attribute трябва да бъде валиден IPv4 адрес.',
    'ipv6' => ':attribute трябва да бъде валиден IPv6 адрес.',
    'json' => ':attribute трябва да бъде валиден JSON низ.',
    'list' => ':attribute трябва да бъде списък.',
    'lowercase' => ':attribute трябва да бъде с малки букви.',
    'lt' => [
        'array' => ':attribute трябва да има по-малко от :value елемента.',
        'file' => ':attribute трябва да бъде по-малък от :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-малък от :value.',
        'string' => ':attribute трябва да бъде по-малък от :value знака.',
    ],
    'lte' => [
        'array' => ':attribute не трябва да има повече от :value елемента.',
        'file' => ':attribute трябва да бъде по-малък или равен на :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-малък или равен на :value.',
        'string' => ':attribute трябва да бъде по-малък или равен на :value знака.',
    ],
    'mac_address' => ':attribute трябва да бъде валиден MAC адрес.',
    'max' => [
        'array' => ':attribute не може да има повече от :max елемента.',
        'file' => ':attribute не може да бъде по-голям от :max килобайта.',
        'numeric' => ':attribute не може да бъде по-голям от :max.',
        'string' => ':attribute не може да бъде по-голям от :max знака.',
    ],
    'max_digits' => ':attribute не трябва да има повече от :max цифри.',
    'mimes' => ':attribute трябва да бъде файл от тип: :values.',
    'mimetypes' => ':attribute трябва да бъде файл от тип: :values.',
    'min' => [
        'array' => ':attribute трябва да има поне :min елемента.',
        'file' => ':attribute трябва да бъде поне :min килобайта.',
        'numeric' => ':attribute трябва да бъде поне :min.',
        'string' => ':attribute трябва да бъде поне :min знака.',
    ],
    'min_digits' => ':attribute трябва да има поне :min цифри.',
    'missing' => ':attribute трябва да липсва.',
    'missing_if' => ':attribute трябва да липсва, когато :other е :value.',
    'missing_unless' => ':attribute трябва да липсва, освен ако :other не е :value.',
    'missing_with' => ':attribute трябва да липсва, когато :values присъства.',
    'missing_with_all' => ':attribute трябва да липсва, когато :values присъстват.',
    'multiple_of' => ':attribute трябва да бъде кратно на :value.',
    'not_in' => 'Избраният :attribute е невалиден.',
    'not_regex' => 'Форматът на :attribute е невалиден.',
    'numeric' => ':attribute трябва да бъде число.',
    'password' => [
        'letters' => ':attribute трябва да съдържа поне една буква.',
        'mixed' => ':attribute трябва да съдържа поне една главна и една малка буква.',
        'numbers' => ':attribute трябва да съдържа поне едно число.',
        'symbols' => ':attribute трябва да съдържа поне един символ.',
        'uncompromised' => 'Даденото :attribute се е появило в изтичане на данни. Моля, изберете различно :attribute.',
    ],
    'present' => ':attribute трябва да присъства.',
    'present_if' => ':attribute трябва да присъства, когато :other е :value.',
    'present_unless' => ':attribute трябва да присъства, освен ако :other не е :value.',
    'present_with' => ':attribute трябва да присъства, когато :values присъства.',
    'present_with_all' => ':attribute трябва да присъства, когато :values присъстват.',
    'prohibited' => ':attribute е забранено.',
    'prohibited_if' => ':attribute е забранено, когато :other е :value.',
    'prohibited_unless' => ':attribute е забранено, освен ако :other не е в :values.',
    'prohibits' => ':attribute забранява :other да присъства.',
    'regex' => 'Форматът на :attribute е невалиден.',
    'required' => 'Полето :attribute е задължително!*',
    'required_array_keys' => ':attribute трябва да съдържа записи за: :values.',
    'required_if' => ':attribute е задължително, когато :other е :value.',
    'required_if_accepted' => ':attribute е задължително, когато :other е прието.',
    'required_if_declined' => ':attribute е задължително, когато :other е отказано.',
    'required_unless' => ':attribute е задължително, освен ако :other не е в :values.',
    'required_with' => ':attribute е задължително, когато :values присъства.',
    'required_with_all' => ':attribute е задължително, когато :values присъстват.',
    'required_without' => ':attribute е задължително, когато :values не присъства.',
    'required_without_all' => ':attribute е задължително, когато нито едно от :values не присъства.',
    'same' => ':attribute и :other трябва да съвпадат.',
    'size' => [
        'array' => ':attribute трябва да съдържа :size елемента.',
        'file' => ':attribute трябва да бъде :size килобайта.',
        'numeric' => ':attribute трябва да бъде :size.',
        'string' => ':attribute трябва да бъде :size знака.',
    ],
    'starts_with' => ':attribute трябва да започва с едно от следните: :values.',
    'string' => ':attribute трябва да бъде низ.',
    'timezone' => ':attribute трябва да бъде валидна часова зона.',
    'unique' => ':attribute вече е заето.',
    'uploaded' => ':attribute не успя да се качи.',
    'uppercase' => ':attribute трябва да бъде с главни букви.',
    'url' => ':attribute трябва да бъде валиден URL адрес.',
    'ulid' => ':attribute трябва да бъде валиден ULID.',
    'uuid' => ':attribute трябва да бъде валиден UUID.',

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
            'rule-name' => 'персонализирано съобщение',
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

    'attributes' => [
        'client' => 'име на клиента',
        'contact_person' => 'лице за контакт',
        'company_identifier' => 'ЕИК',
        'phone_number' => 'номер за връзка',
        'address' => 'адрес',
        'object_first' => 'обект',
        'contragent_name' => 'име на контрагента',
        'contragent_contact_person' => 'лице за контакт',
        'contragent_company_identifier' => 'ЕИК',
        'contragent_phone_number' => 'номер за връзка',
        'commission_percentage' => 'процент комисионна',
        'vat_number' => 'ЗДДС №',
        'email' => 'имейл',
        'password' => 'парола',
        'wayOfShowingDocumentation' => 'начин на предоставяне на документация',
        'dateOfMeasurement ' => 'дата на измерване',
        'certificateNumber' => 'номер на сертификат',
        'certificateDate' => 'дата на сертификат',
        'invoice' => 'номер на фактура',
        'invoice_date' => 'дата на фактура',
        'payment_method' => 'начин на плащане',
        'contragent_sum' => 'сума на контрагент',
        'total_sum' => 'реално постъпила сума без ддс',
        'client_address_1' => 'обект на клиента',
        'contragent' => 'контрагент',
        'price_without_vat' => 'сума без ддс',
    ],

];
