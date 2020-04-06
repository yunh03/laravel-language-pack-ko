<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'after_or_equal'       => ':attribute 은 :date 보다 빠르거나 같아야 합니다.',
    'before_or_equal'      => ':attribute 은 :date 보다 늦거나 같아야 합니다.',

    'accepted' => ':attribute 을(를) 동의하지 않았습니다.',
    'active_url' => ':attribute 값이 유효하지 않습니다.',
    'after' => ':attribute 을(를) :date 이후 날짜로 설정하십시오.',
    'alpha' => ':attribute 에는 문자만 입력할 수 있습니다.',
    'alpha_dash' => ':attribute 값에는 숫자, 문자 또는 대쉬(-)만 입력할 수 있습니다.',
    'alpha_num' => ':attribute 에는 문자 또는 숫자만 입력할 수 있습니다.',
    'array' => ':attribute 은(는) 유효한 형식이 아닙니다.',
    'before' => ':attribute 을(를) :date 이 날짜로 설정하십시오.',
    'between' => [
        'numeric' => ':attribute 은(는) :min 과 :max 값을 벗어나지 않게 설정하십시오.',
        'file' => ':attribute 은(는) :min 과 :max KB 벗어나지 않게 설정하십시오.',
        'string' => ':attribute 은(는) :min 과 :max 글자가 아닙니다.',
        'array' => ':attribute 은(는) :min 과 :max 개를 벗어나지 않게 설정하십시오.',
    ],
    'boolean' => ':attribute 은(는) 유효하지 않습니다.',
    'confirmed' => ':attribute 와 :attribute 가 일치하지 않습니다.',
    'date' => ':attribute 은(는) 유효하지 않은 날짜입니다.',
    'date_format' => ':attribute 은(는) :format 에 올바르지 않습니다.',
    'different' => ':attribute 은(는) :other 와(과) 다릅니다.',
    'digits' => ':attribute 은(는) :digits 자릿 수입니다.',
    'digits_between' => ':attribute 가 :min ~ :max 자릿 수를 벗어나지 않게 설정하십시오.',
    'distinct' => ':attribute 와(과) 중복된 항목이 있습니다.',
    'email' => ':attribute 가 형식과 일치하지 않습니다.',
    'exists' => ':attribute 와(과) 해당하는 리소스가 존재하지 않습니다.',
    'filled' => ':attribute 은(는) 필수 항목입니다.',
    'image' => ':attribute 은(는) 이미지가 아닙니다.',
    'in' => ':attribute 은(는) 유효하지 않습니다.',
    'in_array' => ':attribute 은(는) :other 의 요소가 아닙니다.',
    'integer' => ':attribute 은(는) 정수가 아닙니다.',
    'ip' => ':attribute 은(는) 유효한 IP 주소가 아닙니다.',
    'json' => ':attribute 은(는) 유효한 JSON 문자열이 아닙니다.',
    'max' => [
        'numeric' => ':attribute 은(는) :max 보다 큽니다.',
        'file' => ':attribute 의 크기는 :max 의 크기보다 큽니다.',
        'string' => ':attribute 은(는) :max 글자 수를 초과합니다.',
        'array' => ':attribute 은(는) :max 의 존재하는 보다 많습니다.',
    ],
    'mimes' => ':attribute 은(는) :values 와(과) 다른 형식입니다.',
    'min' => [
        'numeric' => ':attribute 은(는) :min 보다 작습니다.',
        'file' => ':attribute 의 크기는 :min 의 크기보다 작습니다.',
        'string' => ':attribute 을(를) :min 글자 이상으로 작성하십시오.',
        'array' => ':attribute 을(를) :max 글자 이상으로 작성하십시오.',
    ],
    'not_in' => ':attribute 이(가) 유효하지 않습니다.',
    'numeric' => ':attribute 은(는) 숫자가 아닙니다.',
    'present' => ':attribute 가 유효하지 않습니다.',
    'regex' => ':attribute 가 유효하지 않습니다.',
    'required' => ':attribute 은(는) 필수 항목입니다.',
    'required_if' => ':attribute 이(가) 누락되었습니다 (:other 이(가) :value 일 때는 필수).',
    'required_unless' => ':attribute 이(가) 누락되었습니다 (:other 이(가) :value 이(가) 아닐 때는 필수).',
    'required_with' => ':attribute 이(가) 누락되었습니다 (:values 이(가) 있을 때는 필수).',
    'required_with_all' => ':attribute 이(가) 누락되었습니다 (:values 이(가) 존재할 때에는 필수).',
    'required_without' => ':attribute 이(가) 누락되었습니다 (:values 이(가) 존재하지 않을 때에는 필수).',
    'required_without_all' => ':attribute 이(가) 누락되었습니다 (:values 이(가) 존재하지 않을 때에는 필수).',
    'same' => ':attribute 와(과) :other 이(가) 일치하지 않습니다.',
    'size' => [
        'numeric' => ':attribute 이(가) :size 가 아닙니다.',
        'file' => ':attribute 의 크기가 :size KB이(가) 아닙니다.',
        'string' => ':attribute 은(는) :size 글자가 아닙니다.',
        'array' => ':attribute 은(는) :max 개가 아닙니다.',
    ],
    'string' => ':attribute 은(는) 글자가 아닙니다.',
    'timezone' => ':attribute 이(가) 올바른 시간대가 아닙니다.',
    'unique' => ':attribute 은(는) 이미 사용 중입니다.',
    'url' => ':attribute 은(는) 유효한 URL이 아닙니다.',

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

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [
        'title' => '제목',
        'content' => '내용',
        'tags' => '태그',
        'files' => '파일',
        'files.*' => '파일',
        'name' => '이름',
        'email' => '이메일 주소',
        'password' => '비밀번호',
        'password_confirmation' => '비밀번호 재입',
        'code'=> 'ID',
        'price'=> '가격',
        'context'=> '상세설명',
//        'use'=> '사용처',
//        'size'=> '크기',
    ],
];