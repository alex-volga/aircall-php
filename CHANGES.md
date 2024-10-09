# CHANGELOG

## [2.2.0](https://github.com/alex-volga/aircall-php/compare/v2.1.2...v2.2.0) (2024-10-09)
### Features
* Add [Integration](https://developer.aircall.io/api-references/#integration)
* Add [AircallNumbers::registrationStatus](https://developer.aircall.io/api-references/#registration-status)
* Add [AircallCalls::transcription](https://developer.aircall.io/api-references/#retrieve-a-transcription)
* Add [AircallCalls::sentiments](https://developer.aircall.io/api-references/#retrieve-sentiments)
* Add [AircallCalls::topics](https://developer.aircall.io/api-references/#retrieve-topics)
* Add [AircallCalls::summary](https://developer.aircall.io/api-references/#retrieve-a-summary)

### Breaking Changes
* Rename Aircall::transfert to Aircall::transfers 

## [2.1.2](https://github.com/alex-volga/aircall-php/compare/v2.1.1...v2.1.2) (2024-09-24)
### Bug Fixes
* Fix delete a tag in AircallTags::delete

## [2.1.1](https://github.com/alex-volga/aircall-php/compare/v2.1.0...v2.1.1) (2024-01-03)
### Bug Fixes
* Hotfix

## [2.1.0](https://github.com/alex-volga/aircall-php/compare/v2.0.1...v2.1.0) (2024-01-03)
### Features
* The ability to [archive](https://developer.aircall.io/api-references/#archive-a-call)/[unarchive](https://developer.aircall.io/api-references/#unarchive-a-call) calls has been added

## [2.0.1](https://github.com/alex-volga/aircall-php/compare/v2.0.0...v2.0.1) (2023-09-07)
### Bug Fixes
* Fix api requests

## 2.0.0 (2020-06-30)
* Upgrade minimum PHP version to 7.1
* BC BREAK: review naming of all functions in all endpoint to simplify them:
  * list
  * get
  * update
  * create
  * search 
  * link
  * ...
  
Eg:
```
# Before
$client->users->getUsers;
$client->users->getUser('155468');

# After

$client->users->list();
$client->users->get('155468');
```


## 1.1.0 (2020-06-30)

* Fix AircallCalls::comment
* Add /calls/:id/insight_cards
* Add all Tag endpoints
* Add all Webhook endpoints
## 1.0.2 (2019-11-24)

 * Add missing endpoints:
   * /calls/:id/metadata
   * /calls/:id/comments
   * /calls/:id/tags
   * /calls/:id/pause_recording
   * /calls/:id/resume_recording
   * /users/:id/calls
   * /users/:id/dial

## 1.0.1 (2019-11-24)

 * Add options to allow extra parameters for filters (https://developer.aircall.io/api-references/#extra-parameters)

## 1.0.0 (2017-01-26)

 * Complete documentation in README
 * Remove unused functions parameters

## 1.0.0-b1 (2017-01-25)

 * initial beta release
