<?php

namespace Mahmoud147\Files\Enum;

enum MsgEnum : string implements BaseEnum
{
    case FolderCreated = 'Folder Was Created Successfully';
    case  FolderDeleted = 'Folder Was Deleted Successfully';
}
