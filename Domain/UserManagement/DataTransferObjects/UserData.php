<?php

namespace Domain\UserManagement\DataTransferObjects;

use Illuminate\Contracts\Support\Arrayable;

class UserData implements Arrayable
{
    public function __construct(
        public string $firstname,
        public string|null $othername,
        public string $surname,
        public string $title,
        public string $dob,
        public string $gender,
        public string $nationality,
        public string $county,
        public string $address,
        public string $code,
        public string $telephone_number,
        public string $mobile_number,
        public string $email,
        public string $alternative_contact_person,
        public string $living_with_disability,
        public string $nature_of_disability,
        public string $disability_reg_no,
        public string $disability_reg_date,
        public string $password,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            firstname: data_get($data, 'firstname'),
            othername: data_get($data, 'othername'),
            surname: data_get($data, 'surname'),
            title: data_get($data, 'title'),
            dob: data_get($data, 'dob'),
            gender: data_get($data, 'gender'),
            nationality: data_get($data, 'nationality'),
            county: data_get($data, 'county'),
            address: data_get($data, 'address'),
            code: data_get($data, 'code'),
            telephone_number: data_get($data, 'telephone_number'),
            mobile_number: data_get($data, 'mobile_number'),
            email: data_get($data, 'email'),
            alternative_contact_person: data_get($data, 'alternative_contact_person'),
            living_with_disability: data_get($data, 'living_with_disability'),
            nature_of_disability: data_get($data, 'nature_of_disability'),
            disability_reg_no: data_get($data, 'disability_reg_no'),
            disability_reg_date: data_get($data, 'disability_reg_date'),
            password: data_get($data, 'password'),
        );
    }

    public function toArray(): array
    {
        return (array) $this;
    }
}
