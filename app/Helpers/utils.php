<?php


/**
 * Obtém as iniciais do nome do usuário autenticado.
 *
 * @return string
 */
if (! function_exists('getUsernameInitials')) {
    function getUsernameInitials(): string
    {
        $parts = explode(' ', auth()->user()->name);

        $initials = $parts[0][0] ?? '';
        $initials .= $parts[1][0] ?? '';

        return strtoupper($initials);
    }
}




