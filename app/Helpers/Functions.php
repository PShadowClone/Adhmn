<?php
if (!function_exists('auth_user')) {
    /**
     * this function is used to return the authenticated user
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     * @author Amr
     */
    function auth_user()
    {
        if (auth()->check()) {
            return auth()->user();
        }
    }
}
if (!function_exists('auth_country_condition')) {
    /**
     * this function is used to return the condition
     * of country.
     *
     * condition of country is the condition that should be appended in
     * every requests that contain the country attribute to make sure that
     * the super admin who has that attribute controls all data of his region
     *
     * @return array
     *
     * @author Amr
     */
    function auth_country_condition()
    {
        $user = auth_user();
        if ($user instanceof \Core\Admin\Models\Admin && $user->country_id) {
            return ['country_id' => $user->country_id];
        }
        return [];
    }
}
if (!function_exists('query_method')) {
    /**
     * this function returns the name of query method that used
     * to fetch data
     *
     * @param $index
     * @return mixed
     */
    function query_method($index)
    {
        $method = ['get', 'all'];
        try {
            return $method[$index];
        } catch (Exception $exception) {
            return ALL_METHOD;
        }
    }
}
