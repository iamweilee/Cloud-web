<?php
return[
    //(:num)表示匹配任何数字,(:any)表示任意字符
    /*默认路由*/
    '_DEFAULT_' => 'IndexController@index',
    'logout'=>'UserController@logout',
    /*分享路由*/
    'share/GetShareInfo/(:any)'=>'ShareController@GetShareInfo',
    'share/GetShareResouce'=>'ShareController@GetShareResouce',
    'share/OpenFile'=>'ShareController@OpenFile',
    'share/SaveFile'=>'ShareController@SaveFile',
    'share/OpenDisk'=>'ShareController@OpenDisk',
    'share/OtherShare'=>'ShareController@OtherShare',
    /*用户登录路由*/
    'verifyCode'  => 'UserController@verifyCode',
    'user/login' => 'UserController@login',
    'user/register' => 'UserController@register',
    'user/forget'  => 'UserController@forget',
    'user/verifyCheck'  => 'UserController@verifyCheck',
    'user/resend'  => 'UserController@resend',
    /*用户信息路由*/
    'user/UserInfo'  => 'UserInfoController@GetUserInfo',
    'user/UpdateUserInfo'  => 'UserInfoController@UpdateUserInfo',
    'user/ChangePass'  => 'UserInfoController@ChangePass',
    'user/ChangeSafeEmail'  => 'UserInfoController@ChangeSafeEmail',
    'user/ChangeSafePhone'  => 'UserInfoController@ChangeSafePhone',
    'user/ChageUserBg'  => 'UserInfoController@ChageUserBg',
    'user/SendCouple'  => 'UserInfoController@SendCouple',
    /*便签应用路由*/
    'note/GetNoteList'  => 'NoteController@GetNoteList',
    'note/GetNoteInfo'=>'NoteController@GetNoteInfo',
    'note/NewNote'=>'NoteController@NewNote',
    'note/RemoveNote'=>'NoteController@RemoveNote',
    'note/UpdateNote'=>'NoteController@UpdateNote',
    'note/FixedNote'=>'NoteController@FixedNote',
    'note/ChangeType'=>'NoteController@ChangeType',
    /*音乐应用路由*/
    'music/GetMusicList'=>'MusicController@GetMusicList',
    'music/GetMusic'=>'MusicController@GetMusic',
    'music/RenameMList'=>'MusicController@RenameMList',
    'music/DeleteMList'=>'MusicController@DeleteMList',
    'music/SearchMusic'=>'MusicController@SearchMusic',
    'music/NewMlist'=>'MusicController@NewMlist',
    'music/SaveMusic'=>'MusicController@SaveMusic',
    'music/DeleteMusic'=>'MusicController@DeleteMusic',
    'music/CollectMusic'=>'MusicController@CollectMusic',
    'music/PlayMusic'=>'MusicController@PlayMusic',
    'music/UploadMusic'=>'MusicController@UploadMusic',
    'music/Recommend'=>'MusicController@Recommend',
    /*网盘应用路由*/
    'disk/GetTreeFile'=>'DiskController@GetTreeFile',
    'disk/GetMainFile'=>'DiskController@GetMainFile',
    'disk/UnZipFile'=>'DiskController@UnZipFile',
    'disk/NewFolder'=>'DiskController@NewFolder',
    'disk/DiskUpload'=>'DiskController@DiskUpload',
    'disk/MoveFile'=>'DiskController@MoveFile',
    'disk/CopyFile'=>'DiskController@CopyFile',
    'disk/RenameFile'=>'DiskController@RenameFile',
    'disk/TrashFile'=>'DiskController@TrashFile',
    'disk/ShareFile'=>'DiskController@ShareFile',
    'disk/InfoFile'=>'DiskController@InfoFile',
    'disk/AddresFile/(:any)'=>'DiskController@AddresFile',
    'disk/RestoreFile'=>'DiskController@RestoreFile',
    'disk/DeleteFile'=>'DiskController@DeleteFile',
    'disk/CancelShareFile'=>'DiskController@CancelShareFile',
    'disk/OpenFile'=>'DiskController@OpenFile',
    'disk/SaveShareFile'=>'DiskController@SaveShareFile',
    /*微聊应用路由*/
    'chat/GetfriendList'=>'ChatController@GetfriendList',
    'chat/Getfriends'=>'ChatController@Getfriends',
    'chat/ContactInfo'=>'ChatController@ContactInfo',
    'chat/GetListSubFriend'=>'ChatController@GetListSubFriend',
    'chat/GetHistoryMessages'=>'ChatController@GetHistoryMessages',
    'chat/GetContactRequest'=>'ChatController@GetContactRequest',
    'chat/ReplyContactRequest'=>'ChatController@ReplyContactRequest',
    'chat/AddContactList'=>'ChatController@AddContactList',
    'chat/RenameContactList'=>'ChatController@RenameContactList',
    'chat/DeleteContactList'=>'ChatController@DeleteContactList',
    'chat/UpdateContactNickName'=>'ChatController@UpdateContactNickName',
    'chat/UpdateContactList'=>'ChatController@UpdateContactList',
    'chat/DeleteContact'=>'ChatController@DeleteContact',
    'chat/SendFriendRequest'=>'ChatController@SendFriendRequest',
    'chat/SearchContact'=>'ChatController@SearchContact',
    'chat/SendMessages'=>'ChatController@SendMessages',
    'chat/CreateGroup'=>'ChatController@CreateGroup',
    'chat/CreatDiscuss'=>'ChatController@CreatDiscuss',
    'chat/InviteFriend'=>'ChatController@InviteFriend',
    'chat/HistoryMessages'=>'ChatController@HistoryMessages',
    /*相册应用路由*/
    'gallery/GetAllPhotos'=>'GalleryController@GetAllPhotos',
    'gallery/GetAlbum'=>'GalleryController@GetAlbum',
    'gallery/GetAllbumPhoto'=>'GalleryController@GetAllbumPhoto',
    'gallery/DeletePhoto'=>'GalleryController@DeletePhoto',
    'gallery/DeleteAlbum'=>'GalleryController@DeleteAlbum',
    'gallery/RenameAlbum'=>'GalleryController@RenameAlbum',
    'gallery/NewAlbum'=>'GalleryController@NewAlbum',
    'gallery/MoveAlbum'=>'GalleryController@MoveAlbum',
    'gallery/GalleryInfo'=>'GalleryController@GalleryInfo',
    'gallery/PhotoUpload'=>'GalleryController@PhotoUpload',
    /*视频应用路由*/
    'video/Recommend'=>'VideoController@Recommend',
    'video/Classify'=>'VideoController@Classify',
    'video/Comment'=>'VideoController@Comment',
    'video/Queries'=>'VideoController@Queries',
    'video/Search'=>'VideoController@Search',
    'video/SubByTag'=>'VideoController@SubByTag',
    'video/TagVideo'=>'VideoController@TagVideo',
    'video/TagDynamics'=>'VideoController@TagDynamics',
    /*文档应用路由*/
    'doment/GetDoment'=>'DomentController@GetDoment',
    'doment/GetDomentByTime'=>'DomentController@GetDomentByTime',
    'doment/GetDomentByTrash'=>'DomentController@GetDomentByTrash',
    'doment/LoadDoment'=>'DomentController@LoadDoment',
    'doment/UnlockDoment'=>'DomentController@UnlockDoment',
    'doment/NewDoment'=>'DomentController@NewDoment',
    'doment/SaveDoment'=>'DomentController@SaveDoment',
    'doment/UploadImage'=>'DomentController@UploadImage',
    'doment/RenameDoment'=>'DomentController@RenameDoment',
    'doment/TrashDoment'=>'DomentController@TrashDoment',
    'doment/DeleteDoment'=>'DomentController@DeleteDoment',
    'doment/RestoreDoment'=>'DomentController@RestoreDoment',
    /*词典应用路由*/
    'dict/query'=>'DirtController@query',
    'dict/Transate'=>'DirtController@Transate',
    /*天气路由*/
    'WeatherInfo'=>'WeatherController@GetWeather',
    /*密保柜应用路由*/
    'psssbook/GetPass'=>'PassBookController@GetPass',
    'psssbook/ShowPass'=>'PassBookController@ShowPass',
    'psssbook/CheckUser'=>'PassBookController@CheckUser',
    'psssbook/UpdatePass'=>'PassBookController@UpdatePass',
    'psssbook/DeletePass'=>'PassBookController@DeletePass',
    'psssbook/NewPass'=>'PassBookController@NewPass',
    /*api路由*/
    'api/disk/GetDoment'=>'DiskController@ApiGetDoment',
    'api/disk/OpenDoment'=>'DiskController@ApiOpenDoment',
    'api/disk/TrashDoment'=>'DiskController@TrashFile',
];