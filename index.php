<?php
$static_title = 'Khronos Vulkan SC Registry';

include_once("../../assets/static_pages/khr_page_top.php");
?>

<p> The Vulkan SC registry contains formatted specifications of the Vulkan SC API,
    header files, API reference pages, the reference card, and related
    documentation. The registry also links to the GitHub repository where
    the sources for these documents can be found. </p>

<p> Graphics and compute shaders for Vulkan SC are defined using an
    intermediate representation called SPIR-V, for which specifications
    and headers are published in the <a
    href="https://www.khronos.org/registry/spir-v/">SPIR-V Registry</a>.
    There are a variety of compilers and other tools for generating
    SPIR-V code. We encourage developers to explore related Vulkan
    material starting at the top-level <a
    href="https://www.khronos.org/vulkan/">Vulkan landing page</a>. </p>

<p> <b>NOTE:</b> Vulkan SC and Vulkan currently use the same shader toolchains and SPIR-V dialects. </p>

<p> The <a href="https://github.com/KhronosGroup/GLSL">GLSL Shading
    Language</a> GitHub repository contains OpenGL Shading Language
    extensions to be used with an offline GLSL compiler generating SPIR-V
    code for use with Vulkan SC. </p>


<p> Index to the Vulkan SC Registry page content: </p>

<ul>
    <li> <a href="#apispecs"/> <b>Vulkan SC 1.0 API Specifications</b> </a> </li>
    <li> <a href="#dataformat"/> <b>Khronos Data Format Specification</b> </a> </li>
    <li> <a href="#styleguide"/> <b>Vulkan Documentation and Extensions:
         Procedures and Conventions</b> </a> (the &ldquo;Style Guide&rdquo;)
         </li>
  <!-- Not available for Vulkan SC yet
    <li> <a href="#refguide"/> <b>Vulkan 1.0 API Quick Reference</b> </a> </li>
  -->
    <li> <a href="#refpages"/> <b>Vulkan SC API Reference Pages</b> </a> </li>
    <li> <a href="#repos"/> <b>Vulkan SC GitHub Repositories</b>
        <ul>
        <li> <a href="#repo-docs"/> <b>API and Extension Specification Repository</b> </a>
            <ul>
            <li> <a href="#headers"/> <b>Header Files</b> and <b>Valid Usage Database</b></a> </li>
            <li> <a href="#apiregistry"/> <b>API Registry</b> </a> </li>
            </ul> </li>
        <li> <a href="#repo-cts"/> <b>Conformance Test Suite Repository</b> </a> </li>
        <li> <a href="#repo-loader"/> <b>Loader and Validation Layers Repositories</b> </a> </li>
        <li> <a href="#repo-samples"/> <b>Sample Code Repository</b> </a> </li>
        </ul> </li>
    <li> <a href="#feedback"> <b>Providing Feedback on the Registry</b> </a>
</ul>


<h2> <a name="apispecs"></a> <b>Vulkan SC 1.0 API Specifications</b> </h2>

<p> We publish the Vulkan SC API Specification in PDF and HTML forms. The
    single-file HTML documents is considerably slower to load than the PDF.
    At present we are not publishing a chunked HTML version of the
    Specification. </p>

<p> There are several versions of the Vulkan SC 1.0 Specification, as well as
    related Specifications and collateral material: </p>

<ul>
<li> <b>Vulkan SC 1.0 Core API + all published Extensions</b>
     <a href="specs/1.0-extensions/pdf/vkspec.pdf">(PDF)</a>
     <a href="specs/1.0-extensions/html/vkspec.html">(Single-file HTML)</a>
     This Specification includes all registered Vulkan SC extensions which have
     been incorporated into the Specification Repository, including KHR,
     EXT, and vendor extensions. </li>
<li> <b>Vulkan SC 1.0 Core API</b>
     <a href="specs/1.0/pdf/vkspec.pdf">(PDF)</a> </li>
     <a href="specs/1.0/html/vkspec.html">(Single-file HTML)</a>
</ul>


<h2> <a name="dataformat"></a> <b>Khronos Data Format Specification</b> </h2>

<p> The <a href="https://www.khronos.org/registry/dataformat/"> Data
    Format Specification</a> (version 1.3) defines compressed texture
    formats used by Vulkan SC, and portions of that specification are
    incorporated into the Vulkan SC API Specification by reference. </p>


<h2> <a name="styleguide"></a> <b>Vulkan Documentation and Extensions:
     Procedures and Conventions</b> </h2>

<p> The <a href="https://www.khronos.org/registry/vulkan/specs/1.3/styleguide.html">Vulkan Documentation and
    Extensions: Procedures and Conventions</a> document (colloquially, the
    &ldquo;Style Guide&rdquo;) defines mandatory and recommended conventions
    and best practices used in creating and modifying the API Specification
    and extensions. Authors wishing to write Vulkan SC extension
    specifications, or contribute to existing specifications, should
    familiarize themselves with and adhere to this document. </p>

<p> <b>NOTE:</b> Vulkan SC and Vulkan use the same style guide. </p>


  <!-- Not updated for Vulkan SC 1.0 yet
<h2> <a name="refguide"></a> <b>Vulkan SC 1.0 API Quick Reference</b> </h2>

<p> The <a href="specs/1.0/refguide/Vulkan SC-1.0-web.pdf">Vulkan SC 1.0 API Quick
    Reference (PDF)</a> is a compact document summarizing the Vulkan SC 1.0 API
    commands, structures, and enumerants.

<p> The <a href="specs/1.0/refguide/Vulkan SC-1.1-RefGuide.zip"> InDesign
    sources </a> for the Quick Reference are also available, formatted as a
    <b>.zip</b> file. </p>
  -->


<h2> <a name="refpages"></a> <b>API Reference Pages</b> </h2>

<p> The Vulkan SC API Reference Pages describe how to use individual core
    API and extension commands. The goal is to define all commands and
    structures in the core API and extensions, although there may be some
    omissions. In addition to the HTML format published here, it is possible
    to generate other formats from the reference page sources. </p>

<ul>
<li> <b>Vulkan SC API Reference Pages</b>
     <a href="specs/1.0-extensions/man/html/">(HTML, one file per reference page)</a>
     </li>
</ul>

<p> The reference pages are generated by automatic extraction from the
    Specification source, and are not checked into GitHub. The set of pages
    linked above are generated from the Vulkan SC 1.0 API Specification
    including all extensions, but sets of pages including arbitrary
    extensions can be generated in the same fashion as specifications
    including arbitrary extensions. </p>


<h2> <a name="repos"></a> <b> Vulkan SC GitHub Repositories </b> </h2>

<h3> <a name="repo-docs"></a> <b>API and Extension Specification Repository</b> </h3>

<p> The <a href="https://github.com/KhronosGroup/VulkanSC-Docs">
    VulkanSC-Docs</a> repository contains the Asciidoctor source for the
    Vulkan SC core API specification, and for registered Vulkan SC API
    extensions. <b>Note:</b> Vulkan SC spec sources are in the
    <tt>sc_main</tt> branch, which is the default branch of the repository.
    </p>

<p> All published extension specifications are included in the
    <tt>sc_main</tt> branch. Specifications and reference pages can be built
    with or without different combinations of extensions by appropriate
    invocation of the Makefile. </p>

<p> All versions of the Vulkan SC Specification can be generated out of the
    <tt>sc_main</tt> branch. </p>

<p> Other branches in the repository are either specific to the Vulkan API,
    or of historical interest only. </p>

<p> Registered and published extensions are listed below, grouped by
    Author/Vendor ID.
    The links are to extension reference pages; these pages are quick to
    load compared to the full <a
    href="specs/1.0-extensions/html/vkspec.html"> Vulkan SC 1.0 Core API + all
    published Extensions </a> Specification, and they link back to it if
    more information or context is needed.
    The list of links is generated based on the <tt>supported</tt> tags in
    <tt>xml/vk.xml</tt> in the <tt>sc_main</tt> branch of Vulkan-Docs, and
    may contain anomalies in the form of links to extensions marked as
    supported by a vendor, but whose specifications have not yet been merged
    into the Vulkan-Docs repository. </a> </p>

<!-- Generated from xml/indexExt.py in the VulkanSC-Docs repository -->
    <!--
<?php include_once("extensions.php"); ?>
    -->
<p> <b>NOTE:</b> List of SC extensions TBD. </p>

<p> VulkanSC-Docs also contains the header files, API Registry, and reference
    page sources. </p>


<h4> <a name="headers"></a> <b>Header Files</b> </h4>

<p> For most developers, the C header files provided with a loader and/or
    driver package, such as the one defined in the <a href="#repo-loader">
    loader and validation layers</a> GitHub repository, are all that's
    needed. We also provide a canonical version of these headers
    corresponding to spec updates in the <tt>sc_main</tt> branch of the <a
    href="#vulkan-headers"> KhronosGroup/Vulkan-Headers</a> repository.
    These headers do <b>not</b> include VulkanHPP-style C++ headers at present,
    but there is a MISRA C++ friendly <tt>vulkan_sc_core.hpp</tt> header.</p>

<p> The <tt>sc_main</tt> branch of Vulkan-Headers also includes a <a
    href="specs/1.0-extensions/validation/validusage.json">JSON file
    containing Valid Usage ID (VUID) tags</a> (and corresponding valid usage
    statements) extracted from the specification sources. This is used only
    by the validation layer, at present. </p>

<p> All Vulkan SC headers provided by Khronos are ultimately generated from
    the <tt>sc_main</tt> branch of the <a href="#repo-docs">
    VulkanSC-Docs</a> repository. If the headers we provide aren't
    sufficient, you may clone the VulkanSC-Docs repository and generate
    headers yourself, following instructions there. If you need to generate
    a customized version of the headers, modify the <a
    href="#apiregistry">API Registry</a> and scripts under <b>xml/</b>. </p>

<p> Note: there are two static headers included in the <tt>sc_main</tt>
    branch of Vulkan-Headers, <tt>vk_platform.h</tt> and <tt>vulkan_sc.h</tt>.
    These headers are not generated dynamically from the VulkanSC-Docs
    repository. </p>


<h4> <a name="apiregistry"></a> <b>API Registry</b> </h4>

<p> Vulkan SC defines an API Registry for the core API and extensions,
    formally defining command prototypes, structures, enumerants, and
    many other aspects of the API and extension mechanisms. The Vulkan SC
    Registry is used for many more purposes than most other Khronos API
    registries, and is the basis for generating the header files;
    Asciidoctor include files used in the Specification, and reference
    pages for interface definitions, parameter and member validity
    language, and synchronization language; and more. </p>

<p> The Registry is in an XML file called <b>vk.xml</b> and currently
    located in the <tt>sc_main</tt> branch of <a
    href="#repo-docs">VulkanSC-Docs</a> repository under <b>xml/</b>. This
    directory also includes a formal RELAX&nbsp;NG XML schema and scripts
    used to generate the various outputs. </p>

<p> <a
    href="https://www.khronos.org/registry/vulkan/specs/1.3/registry.html">
    Documentation of the XML schema</a> is available. </p>

<p> <b>NOTE:</b> Vulkan SC and Vulkan use the same registry schema. </p>


<h3> <a name="repo-cts"></a> <b>Conformance Test Suite Repository</b> </h3>

<p> The <a href="https://github.com/KhronosGroup/VK-GL-CTS">VK-GL-CTS</a>
    repository contains the source code for the Vulkan SC Conformance Tests.
    Note that while the CTS source code is freely available, you must be a
    Khronos Adopter and pay the Adopter Fee in order to use the Vulkan SC
    trademark for your implementation. </p>


<h3> <a name="repo-loader"></a> <b>Loader and Validation Layers Repositories</b> </h3>

<p> There are several additional Khronos Github repositories containing
    Vulkan SC source code, libraries, and tools: </p>

<ul>
<li> The <tt>sc_main</tt> branch of the <a
     href="https://github.com/KhronosGroup/Vulkan-Headers"
     id="vulkan-headers"> Vulkan-Headers</a> repository contains a copy of
     the Vulkan XML API Registry and scripts for processing it, taken from
     the latest public specification update in the <a href="#repo-docs">
     VulkanSC-Docs</a> project, and the corresponding generated Vulkan SC API
     headers. </li>
<!-- Not available for Vulkan SC 1.0 yet
<li> The <a href="https://github.com/KhronosGroup/Vulkan-Tools"
     id="vulkan-tools"> Vulkan-Tools</a> repository contains Khronos
     official Vulkan SC Tools and Utilities for Windows, Linux, Android, and
     MacOS. </li>
<li> The <a href="https://github.com/KhronosGroup/Vulkan-ValidationLayers"
     id="vulkan-layers"> Vulkan-ValidationLayers</a> repository contains
     the Khronos official Vulkan SC validation layers for Windows, Linux,
     Android, and MacOS. </li>
<li> The <a href="https://github.com/KhronosGroup/Vulkan-Loader"
     id="vulkan-loader"> Vulkan-Loader</a> repository contains the Vulkan
     SC loader that is used for Linux, Windows, MacOS, and iOS. </li>
-->
<li> The <a href="https://github.com/KhronosGroup/VulkanSC-pcutil"
     id="vulkan-pcutil"> VulkanSC-pcutil</a> repository contains a Vulkan SC
     Pipeline Cache Utility library. </li>
</ul>

<h3> <a name="repo-samples"></a> <b>Sample Code Repository</b> </h3>

<p> Not yet available. </p>
<!-- Not available for Vulkan SC 1.0 yet
<p> The <a href="https://github.com/KhronosGroup/VulkanSC-Samples">
    VulkanSC-Samples</a> repository contains sample code showing use of
    Vulkan SC, contributed by various Khronos members and other authors.
    </p>
-->

<h3> <a name="repo-other"></a> <b>Other Repositories</b> </h3>

<p> Other Khronos repositories containing Vulkan SC material include: </p>

<ul>
<li> None yet! </li>
    <!-- No Vulkan SC C++ headers, at present
<li> The <a href="https://github.com/KhronosGroup/Vulkan-Hpp"
     id="vulkan-hpp"> Vulkan-Hpp</a> repository contains code used to
     generate <tt>vulkan.hpp</tt>, a C++ binding for Vulkan SC. A version of
     <tt>vulkan.hpp</tt> is included in the <a
     href="#vulkan-headers">VulkanSC-Headers</a> repository. </li>
    -->
</ul>
 
<h3> <a name="feedback"></a> <b>Providing Feedback on the Registry</b> </h3>

<p> Khronos welcomes comments and bug reports. To provide feedback on the
    Vulkan SC registry itself (such as reporting missing content, bad links,
    etc.), file an issue in the <a
    href="https://github.com/KhronosGroup/VulkanSC-Registry/issues">
    VulkanSC-Registry </a> Github project. </p>

<p> For the Vulkan SC Specification or other documentation and tools, file
    an Issue on the appropriate <a href="#repos">GitHub Repository</a>. </p>

<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>
