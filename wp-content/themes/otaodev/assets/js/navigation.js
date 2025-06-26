document.addEventListener('DOMContentLoaded', () => {
    // Funções auxiliares
    const closeAllDropdowns = () => {
        document.querySelectorAll('.dropdown').forEach(dropdown => {
        dropdown.classList.remove('is-active');
        });
    };
    
    const closeNavbarMenu = () => {
        const navbar = document.querySelector('.navbar-menu');
        if (navbar) {
        navbar.classList.remove('is-active');
        }
    };
    
    // Gerenciamento do Menu Hamburguer
    const navbarBurgers = document.querySelectorAll('.navbar-burger');
    navbarBurgers.forEach(burger => {
        burger.addEventListener('click', () => {
        const targetId = burger.dataset.target;
        const target = document.getElementById(targetId);
    
        burger.classList.toggle('is-active');
        target.classList.toggle('is-active');
        });
    });
    
    // Gerenciamento de Dropdowns
    const dropdowns = document.querySelectorAll('.dropdown:not(.is-hoverable)');
    dropdowns.forEach(dropdown => {
        const trigger = dropdown.querySelector('.dropdown-trigger');
        if (trigger) {
        trigger.addEventListener('click', (e) => {
            e.stopPropagation();
            closeAllDropdowns();
            dropdown.classList.toggle('is-active');
        });
        }
    });
    
    // Fechar ao clicar fora
    document.addEventListener('click', (e) => {
        const isDropdownClick = e.target.closest('.dropdown');
        const isNavbarBurgerClick = e.target.closest('.navbar-burger');
        
        if (!isDropdownClick) {
        closeAllDropdowns();
        }
        
        if (!isNavbarBurgerClick && !e.target.closest('.navbar-menu')) {
        closeNavbarMenu();
        navbarBurgers.forEach(burger => burger.classList.remove('is-active'));
        }
    });
    
    // Gerenciamento de links ativos
    const navbarItems = document.querySelectorAll('.navbar-item');
    navbarItems.forEach(item => {
        if (item.href === window.location.href) {
        item.classList.add('is-active');
        }
        
        item.addEventListener('click', () => {
        navbarItems.forEach(navItem => navItem.classList.remove('is-active'));
        item.classList.add('is-active');
        });
    });
    });