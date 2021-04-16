import FormMail from './components/mail/formMail.vue';
import SuccessMail from './components/mail/successMail';
export default  [
    {
        name: 'formMail',
        path: '/email/form',
        component: formMail
    },
    {
        name:'successMail',
        path:'/email/success',
        component: successMail
    }

];
