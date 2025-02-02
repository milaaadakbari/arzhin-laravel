<?php

namespace App\Enum;

enum CommentStatus
{
    case Draft='draft';
    case Accepted='accepted';
    case Rejected='rejected';
}
