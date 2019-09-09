<template>
  <b-container fluid>
    <b-row no-gutters>
      <b-col cols="4">
        <contact-list-component
            @conversationSelected="changeActiveConversation($event)">
        </contact-list-component>
      </b-col>

      <b-col cols="8">
        <active-conversation-component
            v-if="selectConversation"
            :contact-id="selectConversation.contact_id"
            :contact-name="selectConversation.contact_name"  >
        </active-conversation-component>
      </b-col>
    </b-row>
  </b-container>
</template>


<script>
    export default {
      data(){
        return {
          selectConversation: null
        };
      },
      mounted() {

      },
      methods: {
        changeActiveConversation(conversation){
          //console.log('nueva conversa', conversation);
          this.selectConversation = conversation;
        }
      }
    }
</script>
