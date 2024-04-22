{!! $body !!}

{{-- In Laravel, {!! $body !!} is used to display unescaped data.
This means that the content of the $body variable will be rendered as raw HTML. 
It’s important to be cautious when using this syntax to avoid cross-site scripting (XSS) vulnerabilities. 
If you trust the source of the content and you need HTML tags to be rendered in the browser 
(for example, when displaying content from a WYSIWYG editor), then you can use this syntax. --}}