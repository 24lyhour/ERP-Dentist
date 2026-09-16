<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import ChartAreaInteractive from '@/components/dashboard-01/ChartAreaInteractive.vue';
import DataTable from '@/components/dashboard-01/DataTable.vue';
import SectionCards from '@/components/dashboard-01/SectionCards.vue';
import { dashboard } from '@/routes';

defineOptions({
    layout: {
        breadcrumbs: [
            {
                title: 'Dashboard',
                href: dashboard(),
            },
        ],
    },
});

const data = [
    {
        id: 1,
        header: 'Cover page',
        type: 'Cover page',
        status: 'In Process',
        target: '18',
        limit: '5',
        reviewer: 'Eddie Lake',
    },
    {
        id: 2,
        header: 'Table of contents',
        type: 'Table of contents',
        status: 'Done',
        target: '29',
        limit: '24',
        reviewer: 'Eddie Lake',
    },
    {
        id: 3,
        header: 'Executive summary',
        type: 'Narrative',
        status: 'Done',
        target: '10',
        limit: '13',
        reviewer: 'Eddie Lake',
    },
    {
        id: 4,
        header: 'Technical approach',
        type: 'Narrative',
        status: 'Done',
        target: '27',
        limit: '23',
        reviewer: 'Jamik Tashpulatov',
    },
    {
        id: 5,
        header: 'Design',
        type: 'Narrative',
        status: 'In Process',
        target: '2',
        limit: '16',
        reviewer: 'Jamik Tashpulatov',
    },
];
</script>

<template>
    <Head title="Dashboard" />

    <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4 md:gap-6 md:p-6">
        <SectionCards />
        <ChartAreaInteractive />
        <DataTable :data="data" />
    </div>
</template>
