
import { createRouter, createWebHashHistory } from 'vue-router'
import Home from '../views/Home.vue'


const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/homeAdm',
    name: 'HomeAdm',
    component: () => import('../views/Adm/HomeAdm.vue')
  },

  {
    path:'/homeEnfChefe',
    name: 'HomeEnfChefe',
    component: () => import('../views/enfChefe/HomeEnfChefe.vue')
  },

  {
    path: '/homeEnf',
    name: 'HomeEnf',
    component:() => import('../views/enf/HomeEnf.vue')
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
