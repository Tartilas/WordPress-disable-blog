# WordPres disable blog
> WordPres disable blog is a plugin that allows site creators to remove (hide) the blog functionality on a WordPress site.

Plugin does the following:

- Removes 'Posts' Admin Menu.
- Removes 'post' post type from most queries.
- Disables the Feed for Posts.
- Redirects 'New Post' and 'Edit Post' admin pages to 'New Page' and 'Edit Page' admin pages.
- Redirects 'Comments' admin page with query variable `post_type=post` to main comments page.
- Disable comments feed only if 'post' is only type shown.
- Redirects Single Posts, Post Archives, Tag & Category archives to home page (the latter two are only redirected if 'post' post type is the only post type associated with it).
- Filters out the 'post' post type fromm 'Comments' admin page.
- Removes Post from '+New' admin bar menu.
- Removes post-related dashboard widgets.
- Hides number of posts and comment count on Activity dashboard widget.
- Removes/Redirects 'Writing' Options from Settings Menu.
- Hides 'Posts' options on 'Menus' admin page.
- Removes Post Related Widgets.
- Disables "Press This" functionality.
- Forces Reading Settings: `show_on_front`, `pages_for_posts`, and `posts_on_front`, if they are not already set.
- Removes Available Tools from admin menu and redirects page (houses Press This and Category/Tag converter).
- Hide/redirect discussion options page if 'post' is the only post type supporting it (typically supported by pages).
- Filter comment counts to remove comments associated with 'post' post type.
- Remove feed link from front end (for WP >= 4.4.0), remove comment feed link if 'post' is the only post type supporting comments.
- Hide options in Reading Settings page related to posts (shows front page and search engine options only now).
- Hides other post-related reading options, except Search Engine Visibilty.
- Removes post from author archive query.
- Removes comment and trackback support for posts.
- Alters the comment count to remove any comments associated with 'post' post type.
- Disables the REST API for 'post' post type.