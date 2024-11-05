用Laravel 11重写Likeadmin前后端分离全栈开发框架

技术栈：
- PHP 8.0 => PHP 8.2
- ThinkPHP 5 => Laravel 11
- 管理后台：Vue3 + Typescirpt + ElementPlus UI + TailwindCSS
- 小程序：Vue3 + Typescirpt + Uniapp + TailwindCSS
- PC端：Vue3 + Nuxt

项目刚启动，欢迎加入开源共建~

来源项目：[likeadmin_php](https://github.com/likeadmin-likeshop/likeadmin_php)

### 优先级排期

- [x] 代码结构迁移：遵循 PSR-4
- [x] 核心迁移：路由、中间件、响应封装器
- [x] 基类改造：列表查询类、缓存类、多场景验证器
- [x] 管理端 API - 管理员登录
- [x] 管理端 API - 工作台数据、后台基础配置接口
- [x] 管理端 API - 管理员/角色/菜单权限管理
- [x] 权限控制中间件
- [x] 数据表格导出
- [x] 静态资源放到项目工程
- [x] 数据库模型兼容 TP6：软删除、创建时间、更新时间
- [ ] 管理端 - 文章资讯管理
- [ ] 移动端 - 用户登录注册
- [ ] 移动端 - 文章资讯
- [ ] 渠道设置：微信生态接入
- [ ] 操作日志Listener等监听器逻辑迁移

### API接口迁移工作清单：

| **管理后台**   | 进度 | **移动端**     | 进度 | **PC端**       | 进度 |
|----------------|----|----------------|------|----------------|------|
| 工作台 | ✔ | 登录注册 | ✔ | 首页数据 |      |
| 登录 | ✔ | 文章管理 |      | 网站配置 |      |
| 装修管理 |    | 上传管理 |      | 资讯中心 |      |
| 文章资讯 |    | 用户管理 |      | 文章详情 |      |
| 消息通知 |    | 用户钱包 |      | 扫码登录 |      |
| 渠道设置 |    | 支付相关 |      |                |      |
| 组织管理 |    | 其他 |      |                |      |
| 权限管理 | ✔ |                |      |                |      |
| 系统设置 |    |                |      |                |      |
| 文件管理 |    |                |      |                |      |
| 存储引擎 |    |                |      |                |      |
| 开发工具 |    |                |      |                |      |
| 用户管理 |    |                |      |                |      |
| 通用数据 |    |                |      |                |      |
| 营销应用 |    |                |      |                |      |
| 财务管理 |    |                |      |                |      |
