<template x-for="hit in hits" :key="hit.objectID">
	{{ $slot }}
</template>
