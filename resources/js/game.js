function embedChatSWF(cacheVersion, tipMessage, tipSecuMessage, session) {
    swfobject.embedSWF("chat/chat.swf?CACHE_VERSION=" + cacheVersion, "DIV_TCHAT_SWF", "950", "560", "11.0", "", {
        FBFROMAPP: 0,
        CACHE_VERSION: cacheVersion,
        FBAPPID: "0",
        SESSION: session,
        DAILYMSG: tipMessage,
        DAILYMSGSECU: tipSecuMessage,
    }, {
        wmode: "transparent"
    }, {
        name: "DIV_TCHAT_SWF"
    })
}

function embedProfilSWF(session) {
    swfobject.embedSWF("data/outils/elements/profil/profil.swf", "PROFIL_SWF", "600", "550", "11.0", "", {
        SESSION: session,
    }, {
        wmode: "transparent"
    }, {
        name: "PROFIL_SWF"
    })
}

const updateMembreAvatar = () => {
    $('#skinModal').modal('hide')
}

function setValueWithTransition(id, value) {
    const element = document.getElementById(id)
    element.style.transition = 'opacity 150ms ease'
    element.style.opacity = 0
    setTimeout(() => {
        element.innerHTML = value.toLocaleString('fr-FR')
        element.style.opacity = 1
    }, 150)
}

const bblinfos_setNBC = (value) => document.getElementById('online').innerHTML = value.toLocaleString('fr-FR')
const bblinfos_setBBL = (value) => setValueWithTransition('login-bbl', value)
const bblinfos_setXP = (value) => setValueWithTransition('login-xp', value)

const bblinfos_setAmis = (value, listLength) => {
    setValueWithTransition('login-friends-online', value)
    if (parseInt(document.getElementById('login-friends-length').innerHTML) !== listLength) {
        setValueWithTransition('login-friends-length', listLength)
    }
}
