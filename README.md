# Yolk Contracts

## Introduction

This package defines the interfaces and traits for the core services used
throughout the Yolk framework. e.g. `yolk\contracts\database\DatabaseConnection`
defines the contract for accessing a database, while the
`yolk\contracts\support\collections\Dictionary` contract defines methods for
operating on a collection of key/value pairs.

Each directory corresponds to a Yolk package that provides implementations of
the interfaces defined in that directory. For example, the `gamernetwork/yolk-log`
package contains implementions of `yolk\contracts\log\Logger`.

## Why Contracts?

A separate contracts package provides two primary benefits:

* A quick reference point for all available contracts.
* A single, decoupled package that promotes loose-coupling by separating
interfaces from implementations.

### Quick Reference

Having all of the framework's services neatly defined within interfaces provides
succinct documentation to available features.

Rather than tracking down which methods are available within a large, complicated
class, you can refer to a simpler, cleaner interface.

### Loose Coupling

[Wikipedia Reference](https://en.wikipedia.org/wiki/Loose_coupling)

Yolk packages provide default and usually basic implementations of each contract,
that sometimes might not be sufficient or quite right for a particular project.

By specifying contracts, code is no longer coupled to these specific implementations
and you may easily write alternatives that better suit your project.

Likewise, you can switch between implementations without modifying any consuming
code. The classic example being able to switch caching backends (e.g. Memory/Redis/Memcache)
without modifying any code that uses the cache.

## Naming Conventions

Interfaces in this package are named in one of two ways:

* As a singular noun (e.g. `Dictionary`, `DatabaseConnection`, `Filter`)
* As a noun or verb suffixed with "-able" (e.g. `Arrayable`, `Runnable`)

The implementations of those interfaces with in Yolk components are usually
prefixed with "Base-", although there are some variations - in particular
some implementations still use the deprecated prefix "Generic-".

* `Request` ➡ `BaseRequest`
* `Response` ➡ `BaseResponse`
* `DatabaseConnection` ➡ `BaseConnection`
* `ConnectionManager` ➡ `GenericConnectionManager`
* `Profiler` ➡ `GenericProfiler`
