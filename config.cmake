find_path(XDIFF_INCLUDE_DIR NAMES xdiff.h
          PATHS /usr/include /usr/include/xdiff /usr/local/include /usr/local/include/xdiff) 
find_library(XDIFF_LIBRARY NAMES xdiff PATHS /lib /usr/lib /usr/local/lib)

if (XDIFF_INCLUDE_DIR AND XDIFF_LIBRARY)
  message(STATUS "xdiff include dir: ${XDIFF_INCLUDE_DIR}")
  message(STATUS "xdiff library: ${XDIFF_LIBRARY}")
else()
  message(FATAL_ERROR "xdiff library is required for hphp xdiff extension")
endif()

include_directories(${XDIFF_INCLUDE_DIR})

HHVM_EXTENSION(xdiff xdiff.cpp)
HHVM_SYSTEMLIB(xdiff xdiff.php)

target_link_libraries(xdiff ${XDIFF_LIBRARY})
