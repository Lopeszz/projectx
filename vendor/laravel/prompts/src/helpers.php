<?php

namespace Laravel\Prompts;

use Closure;
use Illuminate\Support\Collection;

/**
 * Prompt the user for text input.
 */
<<<<<<< HEAD
function text(string $label, string $placeholder = '', string $default = '', bool|string $required = false, Closure $validate = null, string $hint = ''): string
{
    return (new TextPrompt($label, $placeholder, $default, $required, $validate, $hint))->prompt();
=======
function text(string $label, string $placeholder = '', string $default = '', bool|string $required = false, Closure $validate = null): string
{
    return (new TextPrompt($label, $placeholder, $default, $required, $validate))->prompt();
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}

/**
 * Prompt the user for input, hiding the value.
 */
<<<<<<< HEAD
function password(string $label, string $placeholder = '', bool|string $required = false, Closure $validate = null, string $hint = ''): string
{
    return (new PasswordPrompt($label, $placeholder, $required, $validate, $hint))->prompt();
=======
function password(string $label, string $placeholder = '', bool|string $required = false, Closure $validate = null): string
{
    return (new PasswordPrompt($label, $placeholder, $required, $validate))->prompt();
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}

/**
 * Prompt the user to select an option.
 *
 * @param  array<int|string, string>|Collection<int|string, string>  $options
 */
<<<<<<< HEAD
function select(string $label, array|Collection $options, int|string $default = null, int $scroll = 5, Closure $validate = null, string $hint = ''): int|string
{
    return (new SelectPrompt($label, $options, $default, $scroll, $validate, $hint))->prompt();
=======
function select(string $label, array|Collection $options, int|string $default = null, int $scroll = 5, Closure $validate = null): int|string
{
    return (new SelectPrompt($label, $options, $default, $scroll, $validate))->prompt();
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}

/**
 * Prompt the user to select multiple options.
 *
 * @param  array<int|string, string>|Collection<int|string, string>  $options
 * @param  array<int|string>|Collection<int, int|string>  $default
 * @return array<int|string>
 */
<<<<<<< HEAD
function multiselect(string $label, array|Collection $options, array|Collection $default = [], int $scroll = 5, bool|string $required = false, Closure $validate = null, string $hint = 'Use the space bar to select options.'): array
{
    return (new MultiSelectPrompt($label, $options, $default, $scroll, $required, $validate, $hint))->prompt();
=======
function multiselect(string $label, array|Collection $options, array|Collection $default = [], int $scroll = 5, bool|string $required = false, Closure $validate = null): array
{
    return (new MultiSelectPrompt($label, $options, $default, $scroll, $required, $validate))->prompt();
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}

/**
 * Prompt the user to confirm an action.
 */
<<<<<<< HEAD
function confirm(string $label, bool $default = true, string $yes = 'Yes', string $no = 'No', bool|string $required = false, Closure $validate = null, string $hint = ''): bool
{
    return (new ConfirmPrompt($label, $default, $yes, $no, $required, $validate, $hint))->prompt();
=======
function confirm(string $label, bool $default = true, string $yes = 'Yes', string $no = 'No', bool|string $required = false, Closure $validate = null): bool
{
    return (new ConfirmPrompt($label, $default, $yes, $no, $required, $validate))->prompt();
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}

/**
 * Prompt the user for text input with auto-completion.
 *
 * @param  array<string>|Collection<int, string>|Closure(string): array<string>  $options
 */
<<<<<<< HEAD
function suggest(string $label, array|Collection|Closure $options, string $placeholder = '', string $default = '', int $scroll = 5, bool|string $required = false, Closure $validate = null, string $hint = ''): string
{
    return (new SuggestPrompt($label, $options, $placeholder, $default, $scroll, $required, $validate, $hint))->prompt();
=======
function suggest(string $label, array|Collection|Closure $options, string $placeholder = '', string $default = '', int $scroll = 5, bool|string $required = false, Closure $validate = null): string
{
    return (new SuggestPrompt($label, $options, $placeholder, $default, $scroll, $required, $validate))->prompt();
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}

/**
 * Allow the user to search for an option.
 *
 * @param  Closure(string): array<int|string, string>  $options
 */
<<<<<<< HEAD
function search(string $label, Closure $options, string $placeholder = '', int $scroll = 5, Closure $validate = null, string $hint = ''): int|string
{
    return (new SearchPrompt($label, $options, $placeholder, $scroll, $validate, $hint))->prompt();
=======
function search(string $label, Closure $options, string $placeholder = '', int $scroll = 5, Closure $validate = null): int|string
{
    return (new SearchPrompt($label, $options, $placeholder, $scroll, $validate))->prompt();
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}

/**
 * Render a spinner while the given callback is executing.
 *
 * @template TReturn of mixed
 *
 * @param  \Closure(): TReturn  $callback
 * @return TReturn
 */
function spin(Closure $callback, string $message = ''): mixed
{
    return (new Spinner($message))->spin($callback);
}

/**
 * Display a note.
 */
function note(string $message, string $type = null): void
{
    (new Note($message, $type))->display();
}

/**
 * Display an error.
 */
function error(string $message): void
{
    (new Note($message, 'error'))->display();
}

/**
 * Display a warning.
 */
function warning(string $message): void
{
    (new Note($message, 'warning'))->display();
}

/**
 * Display an alert.
 */
function alert(string $message): void
{
    (new Note($message, 'alert'))->display();
}

/**
<<<<<<< HEAD
 * Display an informational message.
 */
function info(string $message): void
{
    (new Note($message, 'info'))->display();
}

/**
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
 * Display an introduction.
 */
function intro(string $message): void
{
    (new Note($message, 'intro'))->display();
}

/**
 * Display a closing message.
 */
function outro(string $message): void
{
    (new Note($message, 'outro'))->display();
}
