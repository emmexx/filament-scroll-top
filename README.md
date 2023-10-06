# filament-scroll-top
## Filament project for debugging wizard scroll to top problem

The branch with the filament code is master. (Sorry, 1st time using github repositories)

In the .env file change:

```
DB_CONNECTION=sqlite
DB_DATABASE=/path/to/db.sqlite
```

Access using user `jd@fakedomain.com`, password `abc123`.

Click on resource Tests and create a new test.

Scroll to bottom of 1st step, check the 3 toggles and click on Next.

The 2nd step doesn't scroll to top.

Issue on Filament github repository: [#8909](https://github.com/filamentphp/filament/issues/8909)
