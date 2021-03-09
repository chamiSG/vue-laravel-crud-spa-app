<template>
    
    <div class=""> 
        <header class="d-print-none">
            <div class="container text-center text-lg-left">
                <div class="py-3 clearfix">
                <h1 class="site-title mb-0">Chami S</h1>
                <div class="site-nav">
                    <nav role="navigation">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <router-link to="/" class="nav-item nav-link">Preview</router-link>
                        </li>
                         <li class="nav-item">
                            <router-link to="/resume" class="nav-item nav-link">Products List</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/create" class="nav-item nav-link">Create Product</router-link>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>
            </div>
        </header>
        <router-view> </router-view>
        <footer class="pt-4 pb-4 text-muted text-center d-print-none">
            <div class="container">
                <div class="my-3">
                <div class="h4">Chami S</div>
                <div class="footer-nav">
                    <nav role="navigation">
                    <ul class="nav justify-content-center">
                        <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>
                <div class="text-small">
                <!-- <div class="mb-1">&copy; Right Resume. All rights reserved.</div> -->
                <!-- <div>Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div> -->
                </div>
            </div>
        </footer>
    </div>
</template>
 
<script>
    export default {}
</script>