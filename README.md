# VulkanSC-Registry

The VulkanSC-Registry repository contains the VulkanSC API and Extension
Registry, including generated specifications and reference pages, and
reference cards. The sources for these documents are found in the separate
https://github.com/KhronosGroup/Vulkan-Docs repository, in the `sc_main`
branch (NOTE: the `main` branch of Vulkan-Docs contains the Vulkan API
specification, not the SC specification).

VulkanSC-Registry is used as a backing store for the web view of the
registry at https://www.khronos.org/registry/VulkanSC/ . Commits to the
`main` branch of VulkanSC-Registry will be reflected in the web view.

Interesting files in this repository include:

* index.php - toplevel index page for the web view. This relies on PHP
  include files found elsewhere on www.khronos.org and so is not very useful
  in isolation.
* specs/1.0/html/vkspec.html - Vulkan SC 1.0 core API specifications and
  reference pages and API reference card.
* specs/1.0-extensions/html/vkspec.html - Vulkan SC 1.0 API specification
  including all registered and published extensions from Khronos, vendors,
  and other authors.
