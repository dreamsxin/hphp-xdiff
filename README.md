## Xdiff Extension for HipHop

This is an implementation of the `xdiff` PHP extension for the [HipHop PHP VM][fb-hphp].

### Prerequisites

This extension only requires the `libxdiff` library. The library is available on the [LibXDiff homepage][libxdiff].

### Building & Installation

Installation requires a copy of HipHop to be built from source on the local machine, instructions
on how to do this are available on the [HipHop Wiki][fb-wiki]. Once done, the following commands
will build the extension.

~~~
$ cd /path/to/extension
$ $HPHP_HOME/hphp/tools/hphpize/hphpize
$ cmake .
$ make
~~~

This will produce a `xdiff.so` file, the dynamically-loadable extension.

To enable the extension, you need to have the following section in your hhvm config file

~~~
DynamicExtensionPath = /path/to/hhvm/extensions
DynamicExtensions {
	* = xdiff.so
}
~~~

Where `/path/to/hhvm/extensions` is a folder containing all HipHop extensions, and `xdiff.so` is in
it. This will cause the extension to be loaded when the virtual machine starts up.

As always, bugs should be reported to the issue tracker and patches are very welcome.

[fb-hphp]: https://github.com/facebook/hiphop-php "HipHop PHP"
[fb-wiki]: https://github.com/facebook/hiphop-php/wiki "HipHop Wiki"
[libxdiff]: http://www.xmailserver.org/xdiff-lib.html "LibXDiff Homepage"
