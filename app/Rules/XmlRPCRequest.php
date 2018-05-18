<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class XmlRPCRequest implements Rule
{
    private $data = [];

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        # Check XML RPC Connection
        $wpClient = new \WordpressXmlRPC();
        # Log error
        $wpClient->onError(function($error, $event) {
            dd($error);
        });

        # Set the credentials for the next requests
        $wpClient->setCredentials($this->data['url'] . '/xmlrpc.php', $this->data['username'], $this->data['password']);

        $data = $wpClient->getUsersBlogs();

        return isset($data[0]) && isset($data[0]['blogid']);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Can\'t connect to XML RPC server.';
    }
}
