<?php

namespace Alkhachatryan\Encryptable;
use Illuminate\Support\Facades\Crypt;

trait Encryptable
{
    /**
     * Decrypt data from DB table.
     * Decrypt only in that case if the value is not NULL.
     * Otherwise attribute will be NULL.
     *
     * @param mixed $key
     * @return mixed $value
     */
    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        if (in_array($key, $this->encryptable) && null !== $value) {
            $value = Crypt::decrypt($value);
        }

        return $value;
    }

    /**
     * Encrypt incoming data to DB table.
     * Encrypt only in that case if the value is not NULL.
     * Otherwise attribute will be NULL.
     *
     * @param mixed $key
     * @param mixed $value
     * @return string
     */
    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->encryptable) && null !== $value) {
            $value = Crypt::encrypt($value);
        }

        return parent::setAttribute($key, $value);
    }
}
