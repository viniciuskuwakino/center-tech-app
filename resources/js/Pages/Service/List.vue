<script setup lang="ts">
import MainLayout from '@/Layouts/MainLayout.vue'
import { Head } from '@inertiajs/vue3';
import { ColumnDef } from '@tanstack/vue-table';
import { h, onMounted, ref } from 'vue'
import { DataTable } from '@/components/ui/data-table'
import Checkbox from '@/components/ui/checkbox/Checkbox.vue';
import Button from '@/components/ui/button/Button.vue';
import { ArrowUpDown, ChevronDown } from 'lucide-vue-next'
// import DropdownAction from './DropdownAction.vue';
import Badge from '@/components/ui/badge/Badge.vue';
import { ScrollArea, ScrollBar } from '@/components/ui/scroll-area'


interface Service {
  id: number;
  client_name: string;
  client_phone: string;
  device: string;
  brand: string;
  model: string;
  serial_number: string;
  description: string;
  price: number;
  status: boolean;
  created_at: Date;
  updated_at: Date;
}

const props = defineProps<{
  services: Service[];
}>();

console.log('services', props.services)

const columns: ColumnDef<Service>[] = [
  // {
  //   id: 'select',
  //   header: ({ table }) => h(Checkbox, {
  //     'checked': table.getIsAllPageRowsSelected() || (table.getIsSomePageRowsSelected() && 'indeterminate'),
  //     'onUpdate:checked': value => table.toggleAllPageRowsSelected(!!value),
  //     'ariaLabel': 'Select all',
  //   }),
  //   cell: ({ row }) => h(Checkbox, {
  //     'checked': row.getIsSelected(),
  //     'onUpdate:checked': value => row.toggleSelected(!!value),
  //     'ariaLabel': 'Select row',
  //   }),
  //   enableSorting: false,
  //   enableHiding: false,
  // },
  {
    accessorKey: 'id',
    header: 'ID',
    cell: ({ row }) => h('div', { class: 'capitalize' }, row.getValue('id')),
  },
  {
    accessorKey: 'client_name',
    header: 'Cliente',
    cell: ({ row }) => h('div', { class: 'capitalize' }, row.getValue('client_name')),
  },
  {
    accessorKey: 'client_phone',
    header: 'Contato',
    cell: ({ row }) => h('div', { class: 'capitalize' }, row.getValue('client_phone')),
  },
  {
    accessorKey: 'brand',
    header: 'Marca',
    cell: ({ row }) => h('div', { class: 'capitalize' }, row.getValue('brand')),
  },
  {
    accessorKey: 'device',
    header: 'Dispositivo',
    cell: ({ row }) => h('div', { class: 'capitalize' }, row.getValue('device')),
  },
  {
    accessorKey: 'model',
    header: 'Modelo',
    cell: ({ row }) => h('div', { class: 'capitalize' }, row.getValue('model')),
  },
  {
    accessorKey: 'serial_number',
    header: 'N. Série',
    cell: ({ row }) => h('div', { class: 'capitalize' }, row.getValue('serial_number')),
  },
  {
    accessorKey: 'price',
    header: 'Preço',
    cell: ({ row }) => h('div', { class: 'capitalize' }, row.getValue('price')),
  },
  {
    accessorKey: 'status',
    header: 'Pagamento',
    cell: ({ row }) => {

      const status: string = row.getValue('status') === 1 ? 'Realizado' : 'Pendente'

      if (status == 'Realizado') {
        return h(Badge, { class: 'capitalize', variant: 'success' }, () => status)
      } else {
        return h(Badge, { class: 'capitalize', variant: 'destructive' }, () => status)
      }

    },
  },
  // {
  //   accessorKey: 'status',
  //   header: 'Status',
  //   cell: ({ row }) => h('div', { class: 'capitalize' }, row.getValue('status')),
  // },
  // {
  //   accessorKey: 'name',
  //   header: ({ column }) => {
  //     return h(Button, {
  //       variant: 'ghost',
  //       onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
  //     }, () => ['Nome', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
  //   },
  //   cell: ({ row }) => h('div', { class: 'capitalize' }, row.getValue('name')),
  // },
  // {
  //   accessorKey: 'email',
  //   header: ({ column }) => {
  //     return h(Button, {
  //       variant: 'ghost',
  //       onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
  //     }, () => ['Email', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
  //   },
  //   cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('email')),
  // },
  // {
  //   accessorKey: 'role',
  //   header: () => h('div', 'Cargo'),
  //   cell: ({ row }) => {

  //     const role: Role = row.getValue('role')

  //     return h(Badge, { class: 'font-medium capitalize' }, () => role.name)

  //   },
  // },
  // {
  //   id: 'actions',
  //   enableHiding: false,
  //   header: () => h('div', 'Ações'),
  //   cell: ({ row }) => {
  //     const user_id = {
  //       id: 1
  //     }
  //     // const user_id = row.original

  //     // return h('div', { class: 'relative' }, h(DropdownAction, {
  //     //   user_id,
  //     //   onExpand: row.toggleExpanded,
  //     // }))
  //   },
  // },
]

</script>

<template>
  <Head title="Serviços" />

  <MainLayout>
    <div class="flex items-center">
      <h1 class="text-lg font-semibold md:text-2xl">
        Serviços
      </h1>
    </div>

    <ScrollArea class="border rounded-md whitespace-nowrap">
      
      <DataTable :columns="columns" :data="props.services" />
      <ScrollBar orientation="horizontal" />
    </ScrollArea>
      
      <!-- <div class="flex flex-col items-center gap-1 text-center">
        <h3 class="text-2xl font-bold tracking-tight">
          You're logged in!
        </h3>
        <p class="text-sm text-muted-foreground">
          You're logged in!
        </p>
      </div> -->
  </MainLayout>
</template>
