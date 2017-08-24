-- 表的结构：article --
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(40) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `pic` varchar(300) NOT NULL COMMENT '图片',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `fid` int(11) NOT NULL COMMENT '分类ID',
  `ctime` int(11) NOT NULL COMMENT '创建时间',
  `edittime` int(11) NOT NULL COMMENT '修改时间',
  `view` int(11) NOT NULL COMMENT '查看次数',
  `status` int(11) NOT NULL COMMENT '当前状态',
  `mp3` varchar(200) DEFAULT NULL,
  `istop` int(11) NOT NULL DEFAULT '0' COMMENT '是否置顶',
  `viewtumb` int(11) NOT NULL DEFAULT '0' COMMENT '是否显示封面 0显示 1不显示',
  `articlepassword` varchar(50) DEFAULT NULL COMMENT '文章查看密码',
  `video` varchar(500) DEFAULT NULL COMMENT '视频连接',
  `file` varchar(500) DEFAULT NULL COMMENT '附件地址',
  `type` int(11) NOT NULL COMMENT '文章样式',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='文章表';-- <xjx> --

-- 表的结构：category --
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(30) NOT NULL COMMENT '分类名称',
  `fid` int(11) NOT NULL COMMENT '父级ID',
  `type` int(11) NOT NULL COMMENT '分类样式',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '分类排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='分类表';-- <xjx> --

-- 表的结构：code --
CREATE TABLE `code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL COMMENT '邀请码',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态 0未使用 1 使用',
  `user` varchar(40) DEFAULT NULL COMMENT '使用用户',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='邀请码';-- <xjx> --

-- 表的结构：comment --
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '评论者姓名',
  `email` varchar(30) NOT NULL COMMENT '评论者邮箱',
  `content` varchar(200) NOT NULL COMMENT '评论者内容',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '评论者ID',
  `replay` int(11) DEFAULT NULL COMMENT '评论谁',
  `ctime` int(11) NOT NULL COMMENT '评论时间',
  `aid` int(11) NOT NULL COMMENT '文章ID',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态 0显示 1不显示',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论表';-- <xjx> --

-- 表的结构：email_set --
CREATE TABLE `email_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `smtpserver` varchar(200) NOT NULL COMMENT 'SMTP服务器',
  `smtpserverport` int(11) NOT NULL COMMENT 'SMTP服务器端口',
  `smtpusermail` varchar(200) NOT NULL COMMENT 'SMTP服务器的用户邮箱',
  `smtpuser` varchar(200) NOT NULL COMMENT 'SMTP服务器的用户帐号',
  `smtppass` varchar(200) NOT NULL COMMENT 'SMTP服务器的用户密码',
  `reg_set_admin` int(11) NOT NULL COMMENT '用户注册 管理员是否收到邮件 0是 1不是',
  `send_article_set` int(11) NOT NULL COMMENT '用户发表文章  管理员是否收到邮件 0是 1 不是',
  `comment_set` int(11) NOT NULL COMMENT '用户回复 管理员是否收到邮件 0是 1不是',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='邮件设置';-- <xjx> --

-- 表的结构：email_type --
CREATE TABLE `email_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_user_title` varchar(200) NOT NULL COMMENT '用户注册用户收到邮件的标题',
  `reg_user_content` text NOT NULL COMMENT '用户注册用户收到邮件的内容',
  `reg_admin_title` varchar(200) NOT NULL COMMENT '用户注册管理员收到邮件的标题',
  `reg_admin_content` text NOT NULL COMMENT '用户注册管理员收到邮件的内容',
  `send_article_title` varchar(200) NOT NULL COMMENT '用户发文章管理员收到邮件的标题',
  `send_article_content` text NOT NULL COMMENT '用户发文章管理员收到邮件的内容',
  `send_comment_title` varchar(200) NOT NULL COMMENT '用户评论管理员收到邮件的标题',
  `send_comment_content` text NOT NULL COMMENT '用户评论管理员收到邮件的内容',
  `send_message_title` varchar(200) NOT NULL COMMENT '用户收到留言用户邮件的标题',
  `send_message_content` text NOT NULL COMMENT '用户收到留言用户邮件内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='邮件模板';-- <xjx> --

-- 表的结构：friendlink --
CREATE TABLE `friendlink` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(30) NOT NULL COMMENT '标题',
  `content` varchar(200) NOT NULL COMMENT '描述',
  `ctime` int(11) NOT NULL COMMENT '时间',
  `url` varchar(100) NOT NULL COMMENT '链接',
  `type` varchar(20) NOT NULL COMMENT '样式',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='友情链接';-- <xjx> --

-- 表的结构：site --
CREATE TABLE `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(200) NOT NULL COMMENT '网站标题',
  `keywords` text NOT NULL COMMENT '网站关键字',
  `description` text NOT NULL COMMENT '网站描述',
  `logo` varchar(200) NOT NULL COMMENT '网站LOGO',
  `articleSatus` int(11) NOT NULL COMMENT '0 无需审核 1 需要审核',
  `userStatus` int(11) NOT NULL COMMENT '0无需注册码 1需要注册码',
  `admin_email` varchar(100) NOT NULL COMMENT '管理员邮箱',
  `set_content` varchar(50) NOT NULL COMMENT '副标题',
  `name` varchar(50) NOT NULL COMMENT '网站名称',
  `statistics` text NOT NULL COMMENT '网站统计代码',
  `code` text NOT NULL COMMENT '邀请码说明',
  `friend_link` text NOT NULL COMMENT '友情链接说明',
  `icp` varchar(600) NOT NULL COMMENT 'ICP备案号',
  `submission` int(11) NOT NULL COMMENT '是否可以投稿 0可以 1不可以',
  `slides_display` int(11) NOT NULL COMMENT '是否显示幻灯片 0显示 1不显示',
  `file_size` int(11) NOT NULL COMMENT '文件大小限制',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='网站设置';-- <xjx> --

-- 表的结构：slides --
CREATE TABLE `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `url` varchar(100) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='幻灯片';-- <xjx> --

-- 表的结构：trees --
CREATE TABLE `trees` (
  `id` int(3) NOT NULL,
  `name` varchar(16) NOT NULL,
  `age` int(6) NOT NULL,
  `state` varchar(8) NOT NULL,
  `info` varchar(48) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;-- <xjx> --

-- 表的结构：user --
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(40) NOT NULL COMMENT '用户账号',
  `password` varchar(32) NOT NULL COMMENT '用户密码',
  `pic` varchar(200) NOT NULL COMMENT '用户头像',
  `email` varchar(100) NOT NULL COMMENT '邮箱',
  `ctime` int(11) NOT NULL COMMENT '创建时间',
  `lasttime` int(11) NOT NULL COMMENT '上次登录时间',
  `ip` varchar(50) NOT NULL COMMENT '注册IP地址',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态 0启用 1禁用',
  `truename` varchar(30) NOT NULL DEFAULT '里程密' COMMENT '昵称',
  `admin` int(11) NOT NULL DEFAULT '0' COMMENT '是否是管理员',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户表';-- <xjx> --

-- 表的数据：article --
INSERT INTO `article` VALUES
('1','test','<p>音乐分享</p>','./Public/Uploads/2017-08-22/599b916828a9a.jpg','1','10','1503367532','1503367532','5','0','','0','1','','','','1');-- <xjx> --

-- 表的数据：category --
INSERT INTO `category` VALUES
('1','详细数据','0','1','300'),
('2','震动','1','4','9'),
('3','音乐','0','1','200'),
('8','温度','1','4','150'),
('10','音乐分享','3','1','0'),
('22','倾斜','1','4','200'),
('23','湿度','1','4','100');-- <xjx> --

-- 表的数据：email_set --
INSERT INTO `email_set` VALUES
('1','smtp.163.com','25','zhaodong1475@163.com','zhaodong1475@163.com','zxc123456','1','1','1');-- <xjx> --

-- 表的数据：email_type --
INSERT INTO `email_type` VALUES
('1','恭喜您注册本站','<p></p><p></p><p>恭喜您注册本站<strong></strong><br/></p><p></p><p></p>','有人注册本网站了','<p></p><p></p><p>有人注册本网站了</p><p></p><p></p>','有人发表文章了呦','<p></p><p></p><p></p><p>有人发表文章了呦</p><p></p><p></p><p></p>','亲爱的管理员 有人评论文章了呦11122','<p></p><p></p><p></p><p></p><p></p><p>有人评论啦</p><p></p><p></p><p></p><p></p><p></p>','亲爱的管理员有用户留言了啊！','<p></p><p></p>有人留言啦<p></p><p></p>');-- <xjx> --

-- 表的数据：friendlink --
INSERT INTO `friendlink` VALUES
('1','斗图啊','斗图啊是一个在线制作搞笑表情的网站','1454596882','http://www.doutua.com/','info'),
('23','里程密','里程密开源PHP博客系统','1454596882','http://www.lcm.wang/','info');-- <xjx> --

-- 表的数据：site --
INSERT INTO `site` VALUES
('1','古树监控系统',' ','  ','./Public/Uploads/2017-08-24/599ed4b476f58.png','1','0','471593623@qq.com',' ','古树监控系统','<script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cspan id=\'cnzz_stat_icon_1256104530\'%3E%3C/span%3E%3Cscript src=\'\" + cnzz_protocol + \"s11.cnzz.com/stat.php%3Fid%3D1256104530\' type=\'text/javascript\'%3E%3C/script%3E\"));</script>','正如本站的名称一样，里程密，一个程序员里程的秘密，所以我们更希望这里是一个和谐干净的程序员呆的地方，\r\n而不希望这里像菜市场一样杂乱无章. ','使用里程密开源博客系统 并且保持友情链接的网站 可以获得本站邀请码一枚和友情链接\r\n请把你的网站发送给管理员邮箱:lcm1475@aliyun.com 或者把你的网站信息发送给群主\r\n稍后就会添加上你网站的友情链接 ','<a href = \"www.baidu.com\">asd</a>','0','0','8');-- <xjx> --

-- 表的数据：slides --
INSERT INTO `slides` VALUES
('1','古树','./Public/Uploads/2017-08-21/599a3bd38887d.jpg','http://www.baidu.com','1503279945');-- <xjx> --

-- 表的数据：trees --
INSERT INTO `trees` VALUES
('1','白榆','122','正常态','科属'),
('2','侧柏','255','警戒态','科属'),
('3','刺槐','150','干旱态','科属');-- <xjx> --

-- 表的数据：user --
INSERT INTO `user` VALUES
('1','zoropang','4aa1a3a4e966bfa691e43ecf0a28269b','./Public/Uploads/default.png','','1503233691','1503233691','::1','0','管理员','1');-- <xjx> --

