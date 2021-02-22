# PHP Style Guide

All rules and guidelines in this document apply to PHP files unless otherwise noted. References to PHP/HTML files can be interpreted as files that primarily contain HTML, but use PHP for templating purposes.

Forked From : https://gist.github.com/ryansechrest/8138375

> The keywords "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT", "SHOULD", "SHOULD NOT", "RECOMMENDED",  "MAY", and "OPTIONAL" in this document are to be interpreted as described in [RFC 2119](http://www.ietf.org/rfc/rfc2119.txt).

Most sections are broken up into two parts:

1. Overview of all rules with a quick example
2. Each rule called out with examples of do's and don'ts

**Icon Legend**:

`·` Space, `⇥` Tab, `↵` Enter/Return

<!-- ---------------------------------------------------------------------- -->

##Formatting

### 1. Variables

Variables MUST be all lowercase and words MUST be separated by an underscore.

#### &#10006; Incorrect

<pre lang=php>
&lt;?php

$welcome_Message = '';
$Welcome_Message = '';
$WELCOME_MESSAGE = '';

// EOF
 
</pre>

&#8627; Incorrect because `$welcome_Message`, `$Welcome_Message` and `$WELCOME_MESSAGE` are not all lowercase.

<pre lang=php>
&lt;?php

$welcomemessage = '';

// EOF
 
</pre>

&#8627; Incorrect because `welcome` and `message` are not separated with an underscore.

#### &#10004; Correct

<pre lang=php>
&lt;?php

$welcome_message = '';

// EOF
 
</pre>

### 2. Functions

Function name MUST be all lowercase and words MUST be written in camelCase

#### &#10006; Incorrect

<pre lang=php>
&lt;?php

get_Welcome_Message();
Get_Welcome_Message();
GET_WELCOME_MESSAGE();

// EOF
 
</pre>

&#8627; Incorrect because the words in each function mame are separated by an underscore and not a capital letter.

<pre lang=php>
&lt;?php

getwelcomemessage();

// EOF
 
</pre>

&#8627; Incorrect because `welcome` and `message` are not capitalized.

#### &#10004; Correct

<pre lang=php>
&lt;?php

getWelcomeMessage();

// EOF
 
</pre>

&#9650; [Functions](#9-functions)

<!-- ------------------------------ -->
