# Genesis

### Installation

Install via bower

	bower install genesis


### Usage

1. Import `utilities.scss` in sass
2. Write your own configurations
3. Import `conf.scss` (only configuration file) or `common.scss` (bundle of common module)
4. If you imported `conf.scss` only in step 3, import desired sass files here.

### Change Lists

2/7/15

- Now below() and above() will in px instead of em, to ensure accurate scaling
- Added map-extend, now sub-array can merge nicely without copy the whole thing.
- Added hide & grid placeholders 

20/6/15

- Simplify bower workflow


17/6/15

- Make extend alt heading optional
- Add Usage and Susy in the documentation
- Add common.scss and refined the workflow.

18/5/15

- Swap configuration variables to sass array
- Archive rarely use modules
- Added Grunt-copy: resaveScss. It resave Scss from bower_components for import purpose. dest is sass:vendors 

31/3/15

- Restructure variable.scss

27/3/15

- Split Grunt config into per-task files.

27/1/15

- Moved those optional css to variable.scss.
- Added icons, square and round
- Added round class
- Added custom list icon
- Added alternate button class
- Added alternate heading class
- Added max-width 100% for all img
- Added fixes for font awesome larger icon vertical align issue
- Added size, margin and position mixin
- Added Table of Contents
- Added darken mixin
